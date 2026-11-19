<?php

if (INMOLEANT != "TRUE") { die ("You may not directly reference this script."); }

# Closes what inc/header.php opened (<main> and the layout) and draws the footer of www.moleant.com, then closes
# <body> and <html>. The footer is this site's own: it has nothing in common with the footers of api.moleant.com or the
# support site it replaced.

?>
      </main>
   </div>

   <footer class="site-footer">
      <img class="site-footer-watermark" src="/image/logo.png" alt="" aria-hidden="true" loading="lazy">

      <div class="site-footer-container">
         <div class="site-footer-hero">
            <p class="site-footer-kicker">Moleant Discover</p>
            <h2><span class="site-footer-collect">Collect.</span> <span class="site-footer-visualize">Visualize.</span> <span class="site-footer-control">Control.</span></h2>
            <p>Start with a 90 day trial. No terms, cancel at any time.</p>
            <div class="site-footer-actions">
               <a class="site-button" href="mailto:support@moleant.com">Contact us <i class="zmdi zmdi-long-arrow-right" aria-hidden="true"></i></a>
               <a class="site-button site-button-outline" href="/support/">Read the guides</a>
            </div>
         </div>

         <div class="site-footer-cols">
            <nav aria-labelledby="footer-product" style="--accent:#11db76">
               <h3 id="footer-product">Product</h3>
               <ul>
                  <li><a href="/">Overview</a></li>
                  <li><a href="/pricing.php">Pricing</a></li>
                  <li><a href="https://discover.moleant.com">Sign in to Discover</a></li>
               </ul>
            </nav>
            <nav aria-labelledby="footer-learn" style="--accent:#cc51b7">
               <h3 id="footer-learn">Learn</h3>
               <ul>
                  <li><a href="/support/">Support and knowledge base</a></li>
                  <li><a href="/support/?a=creating-an-api-key">Get an API key</a></li>
                  <li><a href="/support/?a=install-inventory-agent-mac">Moleant Engine for macOS</a></li>
                  <li><a href="https://api.moleant.com/discover-api-v2.html">API v2 documentation</a></li>
               </ul>
            </nav>
            <nav aria-labelledby="footer-company" style="--accent:#d4ac50">
               <h3 id="footer-company">Company</h3>
               <ul>
                  <li><a href="/aboutus.php">About us</a></li>
                  <li><a href="mailto:support@moleant.com">support@moleant.com</a></li>
               </ul>
            </nav>
            <nav aria-labelledby="footer-legal" style="--accent:#109cbf">
               <h3 id="footer-legal">Legal</h3>
               <ul>
                  <li><a href="/privacy.php">Privacy policy</a></li>
                  <li><a href="/termsofuse.php">Terms of use</a></li>
                  <li><a href="/cookies.php">Cookie policy</a></li>
               </ul>
            </nav>
         </div>

         <div class="site-footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> Moleant AB. Made in Sweden.</p>
            <p><a href="https://api.moleant.com/">api.moleant.com</a></p>
         </div>
      </div>
   </footer>
</body>

</html>
