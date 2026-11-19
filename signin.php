<?php

$sroot = realpath(dirname(__FILE__));

if (strrpos($sroot, '\\') != "") {
  # Windows
  $sroot = $sroot . "\\";
} else {
  # Linux
  $sroot = $sroot . "/";
}

require $sroot . 'config.php';
require $sroot . 'inc/security.php';
define ("INMOLEANT","TRUE");

# Settings for the header: a public page that needs none of the old scripts.
$pagetitle = "Sign in - Moleant AB";
$pagedesc = "Sign in to Moleant Discover, or manage your plan and subscription in your Moleant account.";
$pageclass = "site-main-wide";
$lightpage = TRUE;

# Load the header file

include("inc/header.php");

?>

<section class="signin" aria-labelledby="signin-title">
	<div class="signin-brand">
		<img src="/image/logo.png" alt="Moleant" width="320">
		<p>Sign in, or choose where you want to go.</p>
	</div>

	<div class="signin-card">
		<h1 id="signin-title">Sign in</h1>
		<p class="signin-sub">New to Moleant? <a href="/pricing.php">Start a free 90 day trial</a></p>

		<div class="signin-options">
			<a class="signin-option" href="https://discover.moleant.com">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-apps"></i></span>
				<span class="signin-option-text">
					<strong>Moleant Discover</strong>
					<span>Open the app to document and control your IT estate.</span>
				</span>
				<i class="zmdi zmdi-long-arrow-right signin-option-arrow" aria-hidden="true"></i>
			</a>

			<a class="signin-option" href="https://account.moleant.com">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-settings"></i></span>
				<span class="signin-option-text">
					<strong>My account</strong>
					<span>Manage your plan and subscription.</span>
				</span>
				<i class="zmdi zmdi-long-arrow-right signin-option-arrow" aria-hidden="true"></i>
			</a>
		</div>

		<p class="signin-help"><a href="/support/?a=cannot-sign-in">Get help signing in</a></p>
	</div>
</section>

<?php

  # Load the footer file
  include("inc/footer.php");
  ?>
