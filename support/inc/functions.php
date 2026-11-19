<?php

# Helpers for the support pages under /support/: the article tree, its menu and the breadcrumb. H() and the asset
# helper live in inc/site.php, which the page chrome needs as well.

if (!defined("INMOLEANT") || INMOLEANT != "TRUE") {
	die("You may not directly reference this script.");
}

require_once __DIR__ . "/../../inc/site.php";

# The URL of an article or folder. Query strings keep the site independent of the web server's rewrite rules.
function Support_Url($slug)
{
	return "/support/?a=" . rawurlencode($slug);
}

# Returns the slug if it is shaped like one, otherwise an empty string. The result is still only a lookup key:
# whether it names a real article is decided by Support_Index_Tree, never by the file system.
function Support_Clean_Slug($value)
{
	if (!is_string($value) || !preg_match('/^[a-z0-9-]{1,80}$/', $value)) {
		return "";
	}
	return $value;
}

# Flattens the tree into slug => array("node" => ..., "ancestors" => the folders above it, outermost first).
function Support_Index_Tree($nodes, $ancestors = array(), &$index = array())
{
	foreach ($nodes as $node) {
		$index[$node["slug"]] = array("node" => $node, "ancestors" => $ancestors);
		if (!empty($node["children"])) {
			Support_Index_Tree($node["children"], array_merge($ancestors, array($node)), $index);
		}
	}
	return $index;
}

# Draws the article tree that sits under "Support" in the site menu. Folders are <details> elements, so they open and
# close without JavaScript, and the ones in $openslugs (the path to the page being viewed) start open.
function Support_Render_Menu($nodes, $current, $openslugs, $level = 0)
{
	echo '<ul class="site-menu-list site-support-tree site-level-' . ($level + 1) . '">';
	foreach ($nodes as $node) {
		$isfolder = !empty($node["children"]);
		echo '<li>';
		if ($isfolder) {
			echo '<details' . (in_array($node["slug"], $openslugs, true) ? ' open' : '') . '>';
			echo '<summary>' . H($node["title"]) . '</summary>';
			Support_Render_Menu($node["children"], $current, $openslugs, $level + 1);
			echo '</details>';
		} else {
			echo '<a href="' . H(Support_Url($node["slug"])) . '"' . ($node["slug"] === $current ? ' aria-current="page"' : '') . '>' . H($node["title"]) . '</a>';
		}
		echo '</li>';
	}
	echo '</ul>';
}

# Draws a breadcrumb trail. Each crumb is array(title, url); the last one, the current page, has no url.
function Support_Render_Breadcrumb($crumbs)
{
	echo '<nav class="support-breadcrumb" aria-label="Breadcrumb"><ol>';
	foreach ($crumbs as $crumb) {
		if (isset($crumb[1])) {
			echo '<li><a href="' . H($crumb[1]) . '">' . H($crumb[0]) . '</a></li>';
		} else {
			echo '<li aria-current="page">' . H($crumb[0]) . '</li>';
		}
	}
	echo '</ol></nav>';
}

# Draws the "still need help?" box with the support mail address. $about is an optional subject for the prefilled mail.
function Support_Render_Contact($about = "")
{
	$subject = $about !== "" ? "?subject=" . rawurlencode("Moleant support: " . $about) : "";
	echo '<aside class="support-contact" aria-labelledby="support-contact-title">';
	echo '<span class="support-contact-icon" aria-hidden="true"><i class="zmdi zmdi-email"></i></span>';
	echo '<div><h2 id="support-contact-title">Still need help?</h2>';
	echo '<p>Email us at <a href="mailto:support@moleant.com' . H($subject) . '">support@moleant.com</a> and tell us what you were doing and what you saw. We will get back to you.</p></div>';
	echo '</aside>';
}
