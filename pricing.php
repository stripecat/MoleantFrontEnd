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
$pagetitle = "Pricing and free trial - Moleant AB";
$pagedesc = "Try Moleant Discover free for 90 days. Cancel at any time, no terms. Contact us to get started.";
$pageclass = "site-main-wide";
$lightpage = TRUE;

# The mail the "Start your free trial" buttons open. There is no price on this page on purpose: customers talk to us first.
$trialmail = "mailto:support@moleant.com?subject=" . rawurlencode("Moleant Discover: I would like to start a trial")
  . "&body=" . rawurlencode("Hi Moleant,\r\n\r\nI would like to try Moleant Discover for 90 days.\r\n\r\nName:\r\nCompany:\r\nPhone (optional):\r\n");

# Load the header file

include("inc/header.php");

?>

<section class="about-hero" aria-labelledby="pricing-title">
	<div class="site-section-inner">
		<span class="site-eyebrow">Pricing</span>
		<h1 id="pricing-title">Try Moleant Discover free for 90 days</h1>
		<p class="about-lead">Moleant Discover is free to use during the 90 day trial. Cancel at any time, without any terms. Get in touch and we will set you up.</p>

		<div class="price-actions">
			<a class="site-button" href="<?php echo H($trialmail); ?>">Start your free trial <i class="zmdi zmdi-long-arrow-right" aria-hidden="true"></i></a>
			<a class="site-button site-button-outline" href="/support/">Read the guides</a>
		</div>

		<div class="about-stats">
			<div class="about-stat"><strong>90 days</strong><span>Free trial</span></div>
			<div class="about-stat"><strong>No terms</strong><span>Cancel at any time</span></div>
			<div class="about-stat"><strong>No charge</strong><span>Without your approval</span></div>
		</div>
	</div>
</section>

<section class="site-section about-story" aria-labelledby="steps-title">
	<div class="site-section-inner">
		<div class="site-section-head">
			<span class="site-eyebrow">How it works</span>
			<h2 id="steps-title">From hello to your first inventory</h2>
		</div>

		<ol class="price-steps">
			<li>
				<span class="price-step-number" aria-hidden="true">1</span>
				<h3>Contact us</h3>
				<p>Send us a few lines about your IT estate. We reply and set up your account.</p>
			</li>
			<li>
				<span class="price-step-number" aria-hidden="true">2</span>
				<h3>Try it for 90 days</h3>
				<p>Collect, document and control your hardware, software and licenses. Cancel at any time.</p>
			</li>
			<li>
				<span class="price-step-number" aria-hidden="true">3</span>
				<h3>We check in with you</h3>
				<p>Before the trial ends we contact you to hear if you have any questions, issues or ideas.</p>
			</li>
		</ol>
	</div>
</section>

<section class="site-section about-team" aria-labelledby="included-title">
	<div class="site-section-inner">
		<div class="site-section-head">
			<span class="site-eyebrow">What is included</span>
			<h2 id="included-title">Everything you need to get a grip on your IT</h2>
		</div>

		<ul class="price-grid">
			<li class="price-card">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-city-alt"></i></span>
				<h3>Five organizations</h3>
				<p>Keep each customer, site or business unit apart.</p>
			</li>
			<li class="price-card">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-storage"></i></span>
				<h3>1 GB of storage</h3>
				<p>For your knowledge articles and uploaded files.</p>
			</li>
			<li class="price-card">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-laptop"></i></span>
				<h3>500 assets to collect</h3>
				<p>Servers and devices discovered automatically.</p>
			</li>
			<li class="price-card">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-layers"></i></span>
				<h3>Unlimited entries</h3>
				<p>Log posts, responsibilities, contacts, software matches and more.</p>
			</li>
			<li class="price-card">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-accounts-alt"></i></span>
				<h3>Unlimited accounts</h3>
				<p>When you enable Active Directory discovery.</p>
			</li>
			<li class="price-card">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-account-circle"></i></span>
				<h3>30 user accounts</h3>
				<p>Microsoft Azure AD accounts or Microsoft 365 invites.</p>
			</li>
		</ul>
	</div>
</section>

<section class="site-section about-story" aria-labelledby="know-title">
	<div class="site-section-inner">
		<div class="site-section-head">
			<span class="site-eyebrow">Good to know</span>
			<h2 id="know-title">No surprises</h2>
		</div>

		<div class="price-notes">
			<div class="price-note">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-shield-check"></i></span>
				<h3>You are never charged by surprise</h3>
				<p>We contact you before Moleant AB changes from Customer Preview to a production plan. You will <b>not be charged</b> anything without being contacted and without your approval.</p>
			</div>
			<div class="price-note">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-time-restore"></i></span>
				<h3>About Customer Preview</h3>
				<p>Moleant AB has the right to cancel a subscription during Customer Preview. If that is the case we will contact you first, to avoid any loss of data.</p>
			</div>
			<div class="price-note">
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-lock"></i></span>
				<h3>Payments with Stripe</h3>
				<p>Moleant AB is integrated with the Stripe payment platform, which is trusted by millions of businesses of all sizes. Moleant AB does not store any credit card details, and no one at Moleant AB has permission to modify any payment details.</p>
			</div>
		</div>

		<div class="price-actions">
			<a class="site-button" href="<?php echo H($trialmail); ?>">Start your free trial <i class="zmdi zmdi-long-arrow-right" aria-hidden="true"></i></a>
			<a class="about-link" href="mailto:support@moleant.com"><i class="zmdi zmdi-email" aria-hidden="true"></i> Or just ask us a question</a>
		</div>
	</div>
</section>

<?php

  # Load the footer file
  include("inc/footer.php");
  ?>
