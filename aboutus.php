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
$pagetitle = "About us - Moleant AB";
$pagedesc = "Meet the team behind Moleant, the tool for automatic IT documentation.";
$pageclass = "site-main-wide";
$lightpage = TRUE;

# Load the header file

include("inc/header.php");

?>

<section class="about-hero" aria-labelledby="about-title">
	<div class="site-section-inner">
		<span class="site-eyebrow">About us</span>
		<h1 id="about-title">The team behind Moleant</h1>
		<p class="about-lead">We have worked in IT for far too long, and thought for just as long about the tool we really wanted to use. After developing since 2018, we are ready to show Moleant Discover to you.</p>

		<div class="about-stats">
			<div class="about-stat"><strong>2018</strong><span>Started developing</span></div>
			<div class="about-stat"><strong>90 days</strong><span>Free trial</span></div>
			<div class="about-stat"><strong>Sweden</strong><span>Where we are from</span></div>
		</div>
	</div>
</section>

<section class="site-section about-story" aria-labelledby="story-title">
	<div class="site-section-inner about-story-grid">
		<div>
			<span class="site-eyebrow">Why we built it</span>
			<h2 id="story-title">Love to document, but make it faster</h2>
			<p>We love documentation. We understand how important it is for complex IT. But to be honest, writing down all the gigabytes and OS versions is quite boring, and since they change quickly, the documentation soon becomes out of date.</p>
			<p>So we wanted a tool that does this automatically: it keeps the hardware and software details up to date by itself, and still lets you add your own twist with documents, RACI matrices and descriptions.</p>
		</div>

		<ul class="about-points">
			<li>
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-refresh-sync"></i></span>
				<span><strong>Always up to date</strong><span>Hardware and software are collected automatically, so nobody types in versions by hand.</span></span>
			</li>
			<li>
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-edit"></i></span>
				<span><strong>Your own twist</strong><span>Add documents, descriptions and system relations on top of what is discovered.</span></span>
			</li>
			<li>
				<span class="about-point-icon" aria-hidden="true"><i class="zmdi zmdi-accounts-alt"></i></span>
				<span><strong>Clear responsibilities</strong><span>A RACI matrix shows who does, approves, advises on and is told about each task.</span></span>
			</li>
		</ul>
	</div>
</section>

<section class="site-section about-team" aria-labelledby="team-title">
	<div class="site-section-inner">
		<div class="site-section-head">
			<span class="site-eyebrow">People</span>
			<h2 id="team-title">Meet the team behind Moleant</h2>
		</div>

		<div class="about-team-grid">
			<article class="about-person" style="--accent:#9305b8">
				<div class="about-photo"><img src="/image/mattias.jpeg" width="800" height="800" alt="Mattias Jadesköld" loading="lazy"></div>
				<span class="about-role">CEO &middot; FrontEnd</span>
				<h3>Mattias Jadesköld</h3>
				<p>Certified IT architect</p>
				<div class="about-links">
					<a class="about-link" href="mailto:mattias@moleant.com"><i class="zmdi zmdi-email" aria-hidden="true"></i> Email</a>
					<a class="about-link" href="https://www.linkedin.com/in/mattias-jadesk%C3%B6ld-229baa1b" rel="noopener"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i> LinkedIn</a>
				</div>
			</article>

			<article class="about-person" style="--accent:#11db76">
				<div class="about-photo"><img src="/image/erik.jpeg" width="500" height="500" alt="Erik Zalitis" loading="lazy"></div>
				<span class="about-role">CFO &middot; BackEnd</span>
				<h3>Erik Zalitis</h3>
				<p>Certified security specialist (CISSP and Ethical Hacker)</p>
				<div class="about-links">
					<a class="about-link" href="mailto:erik@moleant.com"><i class="zmdi zmdi-email" aria-hidden="true"></i> Email</a>
					<a class="about-link" href="https://www.linkedin.com/in/erikzalitis" rel="noopener"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i> LinkedIn</a>
				</div>
			</article>
		</div>
	</div>
</section>

<?php

  # Load the footer file
  include("inc/footer.php");
  ?>
