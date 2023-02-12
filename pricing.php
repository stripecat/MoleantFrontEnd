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

# Load the header file

include("inc/header.php");

?>

<div class="moleantdiv">
<h1>Pricing</h1>

<h2>90 days trial period</h2>
<p>
Moeant Discover subscription include a 90 days trial period. The Trial period can be cancelled at any time without any terms. 
</p>
<p>
You will be contacted by the end of the trial period to check if there are any questions, issues and similar.
    </p>
<p>
The subscription cost 1.000 SEK (around 95 USD) per month and includes:</p>
<p>Five Organizations<br>
1 GB of storage (Knowledge Articles)<br>
500 assets to collect<br>
Unlimited entries (log posts, responsibilies, contacts Software matches etc ...)<br>
Unlimited account (when enabling Active Directory discovery)<br>
30 user accounts (Microsoft Azure AD accounts or Microsoft 365 invites)<br>

</p>
</div>
<div class="moleantdiv">
 

<h2>Change to Subscription plan</h2>
<p>
You will be contacted by Moleant AB before the end of trial period.<br>
Moleant AB will have the right to cancel your subscription during trial period so please be aware of this. However, we will contact you before if this is the case to avoid any loss of data.
<p>
</div>
<div class="moleantdiv">
<h2>Stripe. Payments infrastructure for the internet</h2>
<p>
Moleant AB is integrated with Stripe payment platform. <br>
Stripe  is trusted by millions of businesses of all sizes - from stratups to large enterprises. The payment is integrated with Stripe´s powerful API.<br>
Moleant AB does not store any credit card details and noone at Moleant AB have permissions to modify any payment details. 
<p>
</div>

<?php

  # Load the header file
  include("inc/footer.php");
  ?>