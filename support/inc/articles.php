<?php

# The article tree. This file is the only place that decides what the Support menu shows and in what order.
#
# A node with "children" is a folder: the menu shows it as an expandable group and /support/?a=<slug> shows an overview of its
# children. A node without "children" is an article, and its body is the HTML in content/<slug>.php.
#
# Keys: "slug" (unique across the whole tree, lowercase letters, digits and hyphens), "title", optional "summary"
# (one sentence, used in overviews and as the meta description) and, on top-level nodes only, "icon" (a
# material-design-iconic-font class such as "zmdi-flag").

if (!defined("INMOLEANT") || INMOLEANT != "TRUE") {
	die("You may not directly reference this script.");
}

return array(
	array(
		"slug" => "getting-started",
		"title" => "Getting started",
		"icon" => "zmdi-flag",
		"summary" => "New to Moleant? Start here.",
		"children" => array(
			array(
				"slug" => "welcome",
				"title" => "Welcome to Moleant support",
				"summary" => "What this site covers and how to find your way around it.",
			),
			array(
				"slug" => "signing-in",
				"title" => "Signing in and out",
				"summary" => "Sign in with your Microsoft work account.",
			),
		),
	),
	array(
		"slug" => "discover",
		"title" => "Moleant Discover",
		"icon" => "zmdi-layers",
		"summary" => "Document the organizations, systems and assets in your IT estate.",
		"children" => array(
			array(
				"slug" => "organizations",
				"title" => "Organizations",
				"summary" => "Organizations are the top level of everything you document.",
				"children" => array(
					array(
						"slug" => "adding-an-organization",
						"title" => "Adding an organization",
						"summary" => "Create an organization to hold systems and assets.",
					),
					array(
						"slug" => "managing-access",
						"title" => "Managing access",
						"summary" => "Who can read, change and administer an organization.",
					),
				),
			),
			array(
				"slug" => "systems",
				"title" => "Systems",
				"summary" => "Systems describe the services your organization runs.",
				"children" => array(
					array(
						"slug" => "adding-a-system",
						"title" => "Adding a system",
						"summary" => "Document a system under an organization.",
					),
					array(
						"slug" => "responsibilities-raci",
						"title" => "Responsibilities (RACI matrix)",
						"summary" => "Show who does, approves, advises on and is told about each task for a system.",
					),
				),
			),
			array(
				"slug" => "assets",
				"title" => "Assets",
				"summary" => "Assets are the servers and devices behind your systems.",
				"children" => array(
					array(
						"slug" => "adding-an-asset",
						"title" => "Adding an asset",
						"summary" => "Document a server or device under an organization.",
					),
				),
			),
			array(
				"slug" => "moleant-engine",
				"title" => "Moleant Engine",
				"summary" => "Agents that collect an inventory and send it to Moleant Discover.",
				"children" => array(
					array(
						"slug" => "mac",
						"title" => "Mac",
						"summary" => "Install and manage the inventory agent on macOS.",
						"children" => array(
							array(
								"slug" => "install-inventory-agent-mac",
								"title" => "Installing the Moleant Inventory Agent on macOS",
								"summary" => "Test, install, check and uninstall the inventory agent on a Mac.",
							),
						),
					),
				),
			),
		),
	),
	array(
		"slug" => "development",
		"title" => "Development",
		"icon" => "zmdi-code",
		"summary" => "Connect your own tools to Moleant Discover through the API.",
		"children" => array(
			array(
				"slug" => "creating-an-api-key",
				"title" => "Creating an API key",
				"summary" => "Create an API key in Moleant Discover so your own tools can call the API.",
			),
			array(
				"slug" => "api-documentation",
				"title" => "API documentation",
				"summary" => "The full Moleant Discover API documentation lives on api.moleant.com.",
			),
		),
	),
	array(
		"slug" => "troubleshooting",
		"title" => "Troubleshooting",
		"icon" => "zmdi-alert-circle",
		"summary" => "Fixes for the most common problems.",
		"children" => array(
			array(
				"slug" => "cannot-sign-in",
				"title" => "I can't sign in",
				"summary" => "What to check when sign-in fails.",
			),
			array(
				"slug" => "changes-not-saved",
				"title" => "My changes are not saved",
				"summary" => "What the saving banner means and what to do if it stays.",
			),
		),
	),
);
