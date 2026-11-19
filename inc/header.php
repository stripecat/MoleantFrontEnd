<?php

// This code is important in order to make sure the script must only be loaded from another script and not by any leet hax0r. //EZS

if (INMOLEANT != "TRUE") {
   die("You may not directly reference this script.");
}

require_once __DIR__ . "/site.php";

# Optional settings a page can make before it includes this file:
#   $pagetitle    The <title> of the page. Defaults to "Moleant AB".
#   $pagedesc     The meta description.
#   $pageclass    A class for <main>. The start page uses "site-main-wide" so its sections can run edge to edge.
#   $lightpage    Set to TRUE on a public page that needs none of the old scripts (jQuery, Vue, the toast and the
#                 token helpers). The checkout and order pages leave it unset and keep loading them.
#   $supportnav   On the support pages: array("tree" => ..., "current" => slug, "open" => slugs), which draws the
#                 article tree under "Support" in the menu.
$pagetitle = isset($pagetitle) ? $pagetitle : "Moleant AB";
$pagedesc = isset($pagedesc) ? $pagedesc : "Moleant Discover: the easy way to discover, document and control your IT estate.";
$pageclass = isset($pageclass) ? $pageclass : "";
$lightpage = isset($lightpage) && $lightpage === TRUE;

?>
<!DOCTYPE html>
<html lang="en-US">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-72KN0JXHJ6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-72KN0JXHJ6');
</script>

<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="f2d3e98e-da3d-4f5b-b065-f1aef61177c3" data-blockingmode="auto" type="text/javascript"></script>

   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

   <title><?php echo H($pagetitle); ?></title>
   <meta name="description" content="<?php echo H($pagedesc); ?>" />

<!-- default favicon -->
   <link rel="icon" href="/image/favicon.png" type="image/png">
<!-- for apple mobile devices -->
<link rel="apple-touch-icon-precomposed" href="/image/apple-touch-icon-152x152-precomposed.png" type="image/png" sizes="152x152">
<link rel="apple-touch-icon-precomposed" href="/image/apple-touch-icon-152x152-precomposed.png" type="image/png" sizes="120x120">
<!-- google tv favicon -->
<link rel="icon" href="/image/favicon-googletv.png" sizes="96x96" type="image/png">

   <!--Material Design Iconic Font-->
   <link rel="stylesheet" href="/material-design/css/material-design-iconic-font.min.css" />

   <!--Locally loaded Poppins-->
   <link rel="stylesheet" href="/css/font-face.css" />

   <!-- The older page styles (cards, columns, buttons), then the site chrome and the sections of the new look. -->
   <link href="<?php echo H(Site_Asset_Url("css/default.css")); ?>" rel="stylesheet">
   <link href="<?php echo H(Site_Asset_Url("css/site.css")); ?>" rel="stylesheet">
<?php if (isset($supportnav)) { ?>
   <link href="<?php echo H(Site_Asset_Url("css/support.css")); ?>" rel="stylesheet">
<?php } ?>

<?php if (!$lightpage) { ?>
   <!--jQuery, Vue and the helpers the order and checkout pages call-->
   <script type="text/javascript" src="/scripts/jquery-3.5.1.js"></script>
   <script type="text/javascript" src="/scripts/get-jwt.js"></script>
   <script type="text/javascript" src="/scripts/base_functions.js"></script>
   <script src="/js/vue.min.js"></script>
   <script src="/js/vue-toast-notification.js"></script>
   <link href="/css/theme-sugar.css" rel="stylesheet">
<?php } ?>

   <!-- Lets the stylesheet hide the menu on small screens only when the script that can open it will run. It also
        restores a collapsed menu before the first paint, so the page doesn't jump when js/site-menu.js loads. -->
   <script>
      document.documentElement.className += " js";
      try {
         if (localStorage.getItem("site-menu-collapsed") === "1") {
            document.documentElement.className += " site-collapsed";
         }
      } catch (e) {}
   </script>
   <script src="<?php echo H(Site_Asset_Url("js/site-menu.js")); ?>" defer></script>
</head>

<body>
   <a class="skip-link" href="#main-content">Skip to main content</a>

   <!-- Top bar: the Moleant logo in the middle (a link to the start page), the menu button on small screens and
        the way in to Moleant Discover on the right. -->
   <header class="site-topbar">
      <button type="button" class="menu-trigger" aria-label="Menu" aria-controls="main-navigation" aria-expanded="false"><i class="zmdi zmdi-menu" aria-hidden="true"></i></button>
      <div class="brand-logo">
         <a href="/"><img src="/image/logo.png" title="Moleant Discover" alt="Moleant Discover home"></a>
      </div>
      <a class="site-topbar-signin" href="https://discover.moleant.com"><i class="zmdi zmdi-sign-in" aria-hidden="true"></i> <span>Sign in</span></a>
   </header>

   <div class="site-layout">
      <nav class="site-sidebar" id="main-navigation" aria-label="Main">
         <button type="button" class="site-collapse" aria-label="Collapse menu"><i class="zmdi zmdi-chevron-left" aria-hidden="true"></i></button>
         <ul class="site-menu-list site-level-0">
            <li><a href="/"<?php echo Site_Nav_Current("/"); ?>><span class="icon" aria-hidden="true"><i class="zmdi zmdi-home"></i></span> <span class="site-menu-label">Home</span></a></li>
            <li><a href="/pricing.php"<?php echo Site_Nav_Current("/pricing.php"); ?>><span class="icon" aria-hidden="true"><i class="zmdi zmdi-money"></i></span> <span class="site-menu-label">Pricing</span></a></li>
            <li><a href="/aboutus.php"<?php echo Site_Nav_Current("/aboutus.php"); ?>><span class="icon" aria-hidden="true"><i class="zmdi zmdi-account-circle"></i></span> <span class="site-menu-label">About us</span></a></li>
            <li>
               <a href="/support/"<?php echo isset($supportnav) ? ($supportnav["current"] === "" && empty($supportnav["open"]) ? ' aria-current="page"' : '') : Site_Nav_Current("/support/"); ?>><span class="icon" aria-hidden="true"><i class="zmdi zmdi-help"></i></span> <span class="site-menu-label">Support</span></a>
<?php
   # On the support pages the article tree sits under "Support".
   if (isset($supportnav)) {
      Support_Render_Menu($supportnav["tree"], $supportnav["current"], $supportnav["open"]);
   }
?>
            </li>
         </ul>

         <!-- The way in to the product, at the bottom of the menu like the account block in Moleant Discover. -->
         <div class="site-account">
            <a class="site-account-signin" href="https://discover.moleant.com" title="Sign in"><span class="site-account-icon"><img src="/image/user.png" alt="" width="32" height="32"></span> <span class="site-menu-label">Sign in to Discover</span></a>
         </div>
      </nav>
      <div class="site-overlay" hidden></div>
      <main id="main-content" tabindex="-1"<?php echo $pageclass !== "" ? ' class="' . H($pageclass) . '"' : ''; ?>>
