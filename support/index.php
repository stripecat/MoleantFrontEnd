<?php

# Front controller for the whole support section. /support/?a=<slug> shows an article or a folder overview; without it,
# the start page of the support section. Which slugs exist is decided by the tree in inc/articles.php and nothing else.
#
# This is a public page: it does not load config.php or inc/security.php, so no credentials are in memory while it runs.

define("INMOLEANT", "TRUE");

$sroot = __DIR__;
require $sroot . "/inc/functions.php";
$tree = require $sroot . "/inc/articles.php";
$index = Support_Index_Tree($tree);

$slug = isset($_GET["a"]) ? Support_Clean_Slug($_GET["a"]) : "";
$mode = "home";
$entry = null;

if (isset($_GET["a"])) {
	if ($slug !== "" && isset($index[$slug])) {
		$entry = $index[$slug];
		$isfolder = !empty($entry["node"]["children"]);
		$bodyfile = $sroot . "/content/" . $slug . ".php";
		if ($isfolder) {
			$mode = "folder";
		} elseif (is_file($bodyfile)) {
			$mode = "article";
		}
	}
	if ($mode === "home") {
		http_response_code(404);
		$mode = "notfound";
	}
}

$current = $mode === "article" ? $slug : "";

# The menu opens every folder on the way to the page, and the folder itself when its overview is showing.
$openslugs = array();
if ($entry !== null) {
	foreach ($entry["ancestors"] as $ancestor) {
		$openslugs[] = $ancestor["slug"];
	}
	if ($mode === "folder") {
		$openslugs[] = $slug;
	}
}

# Read by inc/header.php: the page title and description, and the tree to draw under "Support" in the menu.
$sitetitle = "Moleant Support";
$pagetitle = $sitetitle;
$pagedesc = "Guides and answers for Moleant products.";
if ($entry !== null) {
	$pagetitle = $entry["node"]["title"] . " - " . $sitetitle;
	if (!empty($entry["node"]["summary"])) {
		$pagedesc = $entry["node"]["summary"];
	}
} elseif ($mode === "notfound") {
	$pagetitle = "Page not found - " . $sitetitle;
}
$lightpage = TRUE;
$supportnav = array("tree" => $tree, "current" => $current, "open" => $openslugs);

include $sroot . "/../inc/header.php";

if ($mode === "home") {
?>
			<div class="support-article">
				<h1>Moleant Support</h1>
				<p class="support-lead">Guides and answers for Moleant products. Pick a topic below or use the menu on the left.</p>
			</div>
			<div class="support-cards">
<?php
	foreach ($tree as $node) {
?>
				<section class="support-card">
					<h2><?php echo H($node["title"]); ?></h2>
<?php if (!empty($node["summary"])) { ?>
					<p><?php echo H($node["summary"]); ?></p>
<?php } ?>
<?php if (!empty($node["children"])) { ?>
					<ul>
<?php foreach ($node["children"] as $child) { ?>
						<li><a href="<?php echo H(Support_Url($child["slug"])); ?>"><?php echo H($child["title"]); ?></a></li>
<?php } ?>
					</ul>
<?php } ?>
				</section>
<?php
	}
?>
			</div>
<?php
} elseif ($mode === "notfound") {
?>
			<div class="support-article">
				<h1>Page not found</h1>
				<p>We couldn't find that page. It may have moved. Try the menu on the left, or go to the <a href="/support/">support start page</a>.</p>
			</div>
<?php
} else {
	$crumbs = array(array("Support", "/support/"));
	foreach ($entry["ancestors"] as $ancestor) {
		$crumbs[] = array($ancestor["title"], Support_Url($ancestor["slug"]));
	}
	$crumbs[] = array($entry["node"]["title"]);
	Support_Render_Breadcrumb($crumbs);
?>
			<article class="support-article">
				<h1><?php echo H($entry["node"]["title"]); ?></h1>
<?php
	if ($mode === "folder") {
		if (!empty($entry["node"]["summary"])) {
?>
				<p class="support-lead"><?php echo H($entry["node"]["summary"]); ?></p>
<?php
		}
?>
				<ul class="support-children">
<?php foreach ($entry["node"]["children"] as $child) { ?>
					<li>
						<a href="<?php echo H(Support_Url($child["slug"])); ?>"><?php echo H($child["title"]); ?></a>
<?php if (!empty($child["summary"])) { ?>
						<span><?php echo H($child["summary"]); ?></span>
<?php } ?>
					</li>
<?php } ?>
				</ul>
<?php
	} else {
		include $bodyfile;
	}
?>
			</article>
<?php
}

include $sroot . "/../inc/footer.php";
