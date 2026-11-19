<?php

# The latest episodes of IT-säkerhetspodden, read from the podcast's series feed for the start page.
#
# The feed is fetched on the server, never in the visitor's browser, and kept in a cache file for an hour, so a page view
# normally costs no request at all. If the podcast's site is down, the last good copy is shown (or nothing, and the start
# page leaves the section out). Everything from the feed is treated as untrusted: only https links and images on the
# podcast's own host are accepted, and every value is escaped with H() where it is written.

if (!defined("INMOLEANT") || INMOLEANT != "TRUE") {
	die("You may not directly reference this script.");
}

require_once __DIR__ . "/site.php";

define("PODCAST_URL", "https://www.itsakerhetspodden.se/series/it-sakerhetspodden/");
define("PODCAST_FEED_URL", PODCAST_URL . "feed/");
define("PODCAST_HOST", "www.itsakerhetspodden.se");
define("PODCAST_CACHE_SECONDS", 3600);
define("PODCAST_RETRY_SECONDS", 300);
# The series feed holds the whole archive (about 600 KB in November 2026), so the limit leaves room to grow.
define("PODCAST_MAX_BYTES", 8388608);

# True if $url is an https URL on the podcast's own host.
function Podcast_Url_Ok($url)
{
	$parts = parse_url((string) $url);
	return is_array($parts) && isset($parts["scheme"], $parts["host"])
		&& strtolower($parts["scheme"]) === "https" && strtolower($parts["host"]) === PODCAST_HOST;
}

# Turns the XML of the feed into at most $count episodes: array(title, link, date (timestamp), excerpt, image).
# Returns an empty array if the XML is not a feed.
function Podcast_Parse($xml, $count = 3)
{
	$previous = libxml_use_internal_errors(true);
	# LIBXML_NONET: never fetch anything the document points to.
	$doc = simplexml_load_string((string) $xml, "SimpleXMLElement", LIBXML_NONET | LIBXML_NOCDATA);
	libxml_clear_errors();
	libxml_use_internal_errors($previous);
	if ($doc === false || !isset($doc->channel->item)) {
		return array();
	}

	$episodes = array();
	foreach ($doc->channel->item as $item) {
		$title = trim(html_entity_decode((string) $item->title, ENT_QUOTES | ENT_HTML5, "UTF-8"));
		$link = trim((string) $item->link);
		$date = strtotime((string) $item->pubDate);
		if ($title === "" || !Podcast_Url_Ok($link) || $date === false) {
			continue;
		}

		# The description is HTML. Keep only its text, and cut it at a word.
		$excerpt = trim(preg_replace('/\s+/u', " ", html_entity_decode(strip_tags((string) $item->description), ENT_QUOTES | ENT_HTML5, "UTF-8")));
		if (mb_strlen($excerpt) > 150) {
			$excerpt = rtrim(mb_substr($excerpt, 0, 150), " ,.;:-") . "...";
			$excerpt = preg_replace('/\s+\S*\.\.\.$/u', "...", $excerpt);
		}

		$image = "";
		$media = $item->children("http://search.yahoo.com/mrss/");
		if (isset($media->content)) {
			$candidate = (string) $media->content->attributes()->url;
			if (Podcast_Url_Ok($candidate)) {
				$image = $candidate;
			}
		}

		$episodes[] = array("title" => $title, "link" => $link, "date" => $date, "excerpt" => $excerpt, "image" => $image);
		if (count($episodes) >= $count) {
			break;
		}
	}
	return $episodes;
}

# Downloads the feed. Returns the XML, or an empty string on any failure. The certificate is verified.
function Podcast_Download()
{
	if (!function_exists("curl_init")) {
		return "";
	}
	$ch = curl_init(PODCAST_FEED_URL);
	curl_setopt_array($ch, array(
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_MAXREDIRS => 3,
		CURLOPT_PROTOCOLS => CURLPROTO_HTTPS,
		CURLOPT_REDIR_PROTOCOLS => CURLPROTO_HTTPS,
		CURLOPT_SSL_VERIFYPEER => true,
		CURLOPT_SSL_VERIFYHOST => 2,
		CURLOPT_CONNECTTIMEOUT => 2,
		CURLOPT_TIMEOUT => 4,
		CURLOPT_USERAGENT => "MoleantWebsite/1.0",
		# Stop reading if the answer is far larger than a feed should be.
		CURLOPT_NOPROGRESS => false,
		CURLOPT_PROGRESSFUNCTION => function ($handle, $total, $received) {
			return $received > PODCAST_MAX_BYTES ? 1 : 0;
		},
	));
	$body = curl_exec($ch);
	$status = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
	return ($body !== false && $status === 200) ? (string) $body : "";
}

# The latest $count episodes, from the cache when it is fresh.
function Podcast_Latest($count = 3)
{
	$file = rtrim(sys_get_temp_dir(), "/\\") . DIRECTORY_SEPARATOR . "moleant-podcast-series.json";
	$cache = null;
	if (is_file($file)) {
		$cache = json_decode((string) @file_get_contents($file), true);
	}
	if (is_array($cache) && isset($cache["fetched"], $cache["episodes"]) && time() - $cache["fetched"] < PODCAST_CACHE_SECONDS) {
		return array_slice($cache["episodes"], 0, $count);
	}

	$episodes = Podcast_Parse(Podcast_Download(), $count);
	if (count($episodes) > 0) {
		$cache = array("fetched" => time(), "episodes" => $episodes);
	} else {
		# The fetch failed. Keep showing the old episodes, and try again in a few minutes instead of on every page view.
		$old = is_array($cache) && isset($cache["episodes"]) ? $cache["episodes"] : array();
		$cache = array("fetched" => time() - PODCAST_CACHE_SECONDS + PODCAST_RETRY_SECONDS, "episodes" => $old);
	}

	# Write to a temporary file first, so a visitor never reads half a cache.
	$tmp = $file . "." . getmypid() . ".tmp";
	if (@file_put_contents($tmp, json_encode($cache)) !== false) {
		@rename($tmp, $file);
	}
	return array_slice($cache["episodes"], 0, $count);
}
