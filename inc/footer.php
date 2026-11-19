<?php

if (INMOLEANT != "TRUE") { die ("You may not directly reference this script."); }

# Closes what inc/header.php opened (<main>, the layout, and <body>/<html> below) and draws the footer.

?>
      </main>
   </div>

   <footer class="site-footer">
      <div class="site-footer-cta">
         <div class="site-footer-container site-footer-cta-inner">
            <div>
               <h2>Ready to take control of your IT estate?</h2>
               <p>Start with a 90 day trial. No terms, cancel at any time.</p>
            </div>
            <a class="site-button" href="mailto:support@moleant.com">Contact us <i class="zmdi zmdi-long-arrow-right" aria-hidden="true"></i></a>
         </div>
      </div>

      <div class="site-footer-main">
         <div class="site-footer-container">
            <div class="site-footer-grid">
               <div class="site-footer-about">
                  <img src="/image/moleant-logo-white.png" width="134" height="26" alt="Moleant" loading="lazy">
                  <p>Moleant AB builds Moleant Discover, the IT asset discovery and documentation service for IT teams. Made in Sweden.</p>
               </div>
               <nav aria-labelledby="footer-product">
                  <h2 id="footer-product">Product</h2>
                  <ul>
                     <li><a href="https://discover.moleant.com">Sign in to Moleant Discover</a></li>
                     <li><a href="/">Overview</a></li>
                     <li><a href="/pricing.php">Pricing</a></li>
                  </ul>
               </nav>
               <nav aria-labelledby="footer-support">
                  <h2 id="footer-support">Support</h2>
                  <ul>
                     <li><a href="/support/">Support and knowledge base</a></li>
                     <li><a href="/support/?a=creating-an-api-key">Get an API key</a></li>
                     <li><a href="https://api.moleant.com/discover-api-v2.html">API v2 documentation</a></li>
                     <li><a href="mailto:support@moleant.com">support@moleant.com</a></li>
                  </ul>
               </nav>
               <nav aria-labelledby="footer-company">
                  <h2 id="footer-company">Company</h2>
                  <ul>
                     <li><a href="/aboutus.php">About us</a></li>
                     <li><a href="/privacy.php">Privacy policy</a></li>
                     <li><a href="/termsofuse.php">Terms of use</a></li>
                     <li><a href="/cookies.php">Cookie policy</a></li>
                  </ul>
               </nav>
            </div>
            <div class="site-footer-bottom">
               <p>&copy; <?php echo date("Y"); ?> Moleant AB, Sweden. All rights reserved.</p>
               <p><a href="https://api.moleant.com/">api.moleant.com</a></p>
            </div>
         </div>
      </div>
   </footer>
</body>

</html>
