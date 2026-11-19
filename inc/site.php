<?php

# Small helpers for the page chrome (inc/header.php, inc/footer.php) and the support pages. They are kept apart from
# inc/functions.php because that file loads config.php and the JWT library, and a public page that only draws markup
# should not need credentials in memory.

if (!defined("INMOLEANT") || INMOLEANT != "TRUE") {
	die("You may not directly reference this script.");
}

# Escapes text for HTML output. Every value that ends up in the page goes through this.
function H($text)
{
	return htmlspecialchars((string) $text, ENT_QUOTES, "UTF-8");
}

# Adds the file's modification time to the URL, so browsers pick up each deployment instead of a cached older copy.
# $path is relative to the site root, for example "css/site.css".
function Site_Asset_Url($path)
{
	$file = __DIR__ . "/../" . $path;
	return "/" . $path . "?v=" . (is_file($file) ? filemtime($file) : 0);
}

# Returns ' aria-current="page"' when the request path starts with $prefix, otherwise an empty string. Screen readers
# announce the marked menu link as the current page. The start page ("/") only matches itself.
function Site_Nav_Current($prefix)
{
	static $path = null;
	if ($path === null) {
		$path = strtolower((string) parse_url($_SERVER["REQUEST_URI"] ?? "/", PHP_URL_PATH));
		# "/index.php" is the start page too.
		if ($path === "/index.php") {
			$path = "/";
		}
	}
	if ($prefix === "/") {
		return $path === "/" ? ' aria-current="page"' : "";
	}
	return strncmp($path, $prefix, strlen($prefix)) === 0 ? ' aria-current="page"' : "";
}
