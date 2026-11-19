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

# The help center section below is drawn from the support article tree, so it can never point to a page that is gone.
require $sroot . 'support/inc/functions.php';
$supporttree = require $sroot . 'support/inc/articles.php';

# The latest episodes of our two podcasts, in their cards under "Our other projects". A feed that cannot be read simply
# leaves its list out.
require $sroot . 'inc/podcast.php';
$podcasturl = "https://www.itsakerhetspodden.se/series/it-sakerhetspodden/";
$flashbackurl = "https://radio.ericade.net/podcast/";
$podcastepisodes = Podcast_Latest($podcasturl . "feed/", 3);
$flashbackepisodes = Podcast_Latest($flashbackurl . "feed/", 3);

# Settings for the header: the start page runs its sections edge to edge and needs none of the old scripts.
$pagetitle = "Moleant Discover: discover, document and control your IT estate";
$pagedesc = "Tired of out of date documentation and license costs? Moleant Discover collects your hardware, software and identities automatically, so you can document and control them.";
$pageclass = "site-main-wide";
$lightpage = TRUE;

# Load the header file

include("inc/header.php");

?>
<div class="bg-img">
<div class="moleantdiv24">
<img src="https://sadiscover.blob.core.windows.net/img/logo2.png" width="35%" alt="Moleant Discover">

</div>
<div class="row">
<div class="column2">


<div class="moleantdiv24">



<b><p style="color:#656464;font-size:20px">Tired of out of date documentation? Still worrying about license cost?</p></b>
<p style="color:#656464;font-size:20px">Stop. Take control with the easiest and user friendly tool. Just a few clicks away. </p>
</div>
<div class="moleantdiv24">
<button type="button" class="buttonbig" onclick="window.location.href='mailto:support@moleant.com';">Contact us</button>
</div>
</div>

<div class="column2">
<img src="/image/screens.png" width="100%" alt="Screenshots of Moleant Discover">
</div>

</div>
</div>

<div style="background-color:black">

<div class="row">
<div class="column3">
<div class="moleantdiv24">
<h2 style="color:#11db76">COLLECT</h2>
<p>Automatically discover all hardware, software, network traffic, identities and much more.</p>
</div>
</div>
<div class="column3">
<div class="moleantdiv24">
<h2 style="color:#cc51b7">VISUALIZE</h2>
<p>License matching, system relations, upload files, RACI-matrix and log data with the tip of your finger.</p>
</div>
</div>
<div class="column3">
<div class="moleantdiv24">
<h2 style="color:#d4ac50">CONTROL</h2>
<p>Build smart reports, optimize license consumption and share with co-workers from any device.</p>
</div>
</div>
</div>

<div class="row">
<div class="column2">
<div class="bg-img2">
</div>
</div>

<div class="column2">
<div class="moleantdiv24">
<h1>FOR YOU?</h1>

<h2 style="color:#11db76">... THE IT OPERATOR</h2>
<p><b>Stop struggling to update documentation</b><br>
Discover hardware, software, network traffic, certificates, users and network traffic and much more.<br>
Add log notes, descriptions, uploaded files and system relations</p>
<br>
<br>
<h2 style="color:#d4ac50">... THE LICENSE MANAGER</h2>
<p><b>Stop worrying about licensing costs</b><br>
Use a simple mobile-friendly tool to work with licenses. Match discovered software with purchase license to automatically discover Over or Under licensed</p>
<br>
<br>
<h2 style="color:#9305b8">... THE FINANCIAL CHIEF</h2>
<p><b>Reconciled licenses to optimize and distribute software costs.</b><br>
Use responsibility matrix to distribute costs and plan budget.</p>
</div>
</div>
</div>
</div>

<div class="bg-img4">

<div class="moleantdiv24">
<h1 style="color:white">SOME THINGS WE ARE</h1>
<h1>ESPECIALLY PROUD OF</h1>
</div>

<div class="row">
<div class="column4">
<div class="moleantdiv">
<h2><img src="https://sadiscover.blob.core.windows.net/img/entitlement.svg" width="24" height="24" alt=""> SOFTWARE MATCHING</h2>
<p>Discovered software can be matched with purchased licenses.</p>
<p>The <i>Software matching tool</i> makes it easy to reconcile license needs. Work with Under and Over licensed software.</p>
</div>
</div>
<div class="column4">
<div class="moleantdiv">
<h2><img src="https://sadiscover.blob.core.windows.net/img/synced.svg" width="24" height="24" alt=""> LINK RELATIONS</h2>
<p>Link discovered <b>assets</b> to <b>systems</b>. And systems can be linked to <b>organizations</b>.</p>
<p>easy peasy. Relationships that last!</p>
</div>
</div>
<div class="column4">
<div class="moleantdiv">
<h2><img src="https://sadiscover.blob.core.windows.net/img/Responsibilites.svg" width="24" height="24" alt=""> RACI MATRIX</h2>
<p>The description of various roles can be added in your own way.</p>
<p>By documenting asset's and software's responsibilities will make collaboration fun ... hopefully.</p>
</div>
</div>
<div class="column4">
<div class="moleantdiv">
<h2><img src="https://sadiscover.blob.core.windows.net/img/security.svg" width="24" height="24" alt=""> BUILT ON SECURITY</h2>
<p>The people behind Moleant breath .. well bleed security. The product is built for security people. Some features:</p>
<p>- MFA logins</p>
<p>- Role based access</p>
<p>- Moleant engine requires zero permissions</p>
<p>- Data in travel and at rest are encrypted</p>
<p>- Infrastructure is built in Microsoft Azure Architecture</p>
</div>
</div>
</div>

<div class="moleantdiv12">
<button type="button" class="buttonwhitebig" onclick="window.location.href='mailto:support@moleant.com';">Contact us</button>
</div>
</div>

<div style="background-color:black">
<p align="center">
<iframe width="80%" height="315" src="https://www.youtube.com/embed/y9L-fSgakU0" title="Moleant Discover on YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>
</div>

<!-- Our other projects -->
<section class="site-section site-projects" aria-labelledby="projects-title">
	<div class="site-section-inner">
		<div class="site-section-head">
			<span class="site-eyebrow">Beyond Moleant</span>
			<h2 id="projects-title">Our other projects</h2>
			<p>The people behind Moleant also make podcasts, radio and books. All of them about technology, security and the people who care about both.</p>
		</div>

		<div class="site-projects-grid">
			<article class="site-project site-project-linked" style="--accent:#109cbf">
				<div class="site-project-media">
					<img src="/image/projects/itsakerhetspodden.jpg" width="960" height="960" alt="The cover of the podcast IT-säkerhetspodden" loading="lazy">
				</div>
				<div class="site-project-body">
					<span class="site-project-tag">Podcast</span>
					<h3><a class="site-project-link" href="<?php echo H($podcasturl); ?>" target="_blank" rel="noopener">IT-säkerhetspodden<span class="visually-hidden"> (opens in a new tab)</span></a></h3>
					<p>One of Sweden's biggest podcasts in technology, and in cybersecurity in particular.</p>
<?php Podcast_Render_List($podcastepisodes, "sv"); ?>
				</div>
			</article>

			<article class="site-project site-project-linked" style="--accent:#cc51b7">
				<div class="site-project-media">
					<img src="/image/projects/flashback.png" width="646" height="646" alt="The Flashback logo: an eye in front of a radio tower" loading="lazy">
				</div>
				<div class="site-project-body">
					<span class="site-project-tag">Radio &amp; podcast</span>
					<h3><a class="site-project-link" href="<?php echo H($flashbackurl); ?>" target="_blank" rel="noopener">Flashback<span class="visually-hidden"> (opens in a new tab)</span></a></h3>
					<p>The last true tracker music broadcaster. A radio. A podcast.</p>
<?php Podcast_Render_List($flashbackepisodes, "en"); ?>
				</div>
			</article>

			<article class="site-project" style="--accent:#1c9a4f">
				<div class="site-project-media">
					<img src="/image/projects/cyberdeckarna-detectives.svg" width="640" height="400" alt="Two cartoon detectives with a magnifying glass, looking at a bug on a circuit board" loading="lazy">
				</div>
				<div class="site-project-body">
					<span class="site-project-tag">Book</span>
					<h3>Cyberdeckarna</h3>
					<p>A book for children. Two detectives solving cybersecurity related crimes.</p>
					<p class="site-project-edition" lang="sv">Gisslanprogrammet</p>
					<div class="site-project-buy">
						<a class="site-buy" href="https://www.adlibris.com/sv/bok/cyberdeckarna-gisslanprogrammet-9789180072632" target="_blank" rel="noopener"><i class="zmdi zmdi-shopping-cart" aria-hidden="true"></i> Buy at Adlibris<span class="visually-hidden"> (opens in a new tab)</span></a>
						<a class="site-buy" href="https://cdon.se/produkt/cyberdeckarna-gisslanprogrammet-bok-inbunden-bb054326c55a564a/" target="_blank" rel="noopener"><i class="zmdi zmdi-shopping-cart" aria-hidden="true"></i> Buy at CDON<span class="visually-hidden"> (opens in a new tab)</span></a>
					</div>
				</div>
			</article>
		</div>

	</div>
</section>

<!-- Help center: the first guides of every section of the support site. -->
<section class="site-section site-help" aria-labelledby="help-title">
	<div class="site-section-inner">
		<div class="site-section-head">
			<span class="site-eyebrow">Support</span>
			<h2 id="help-title">Frequently asked questions</h2>
			<p style="color:#d4ac50">Knowledge base, articles and support all in one place ...</p>
		</div>

		<div class="site-help-grid">
<?php foreach ($supporttree as $node) { ?>
			<div class="site-help-card">
				<div class="site-help-icon" aria-hidden="true"><i class="zmdi <?php echo H(!empty($node["icon"]) ? $node["icon"] : "zmdi-file-text"); ?>"></i></div>
				<h3><?php echo H($node["title"]); ?></h3>
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
			</div>
<?php } ?>
		</div>

		<div class="site-help-more">
			<a class="site-button" href="/support/">Browse support page <i class="zmdi zmdi-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>
</section>

<?php

  # Load the footer file
  include("inc/footer.php");
  ?>
