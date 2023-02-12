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

<h2>Customer Preview</h2>
<p>
Moeant Discover is free to use for 90 days trial period and can be cancelled at any time without any terms. 
</p>
<p>
You will be contacted before the end of the trial period to check if there are any questions.
    </p>
<p>
The subscription will cost 1.000 SEK (around 99 USD) per month and will include:</p>
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
You will be contacted before Moleant AB change from Customer Preview to a production plan.<br>
You will be <b>not charge</b> anything without beeing contacted and without your approval.<br>
Moleant AB will have the right to cancel your subscription during Customer Preview so please be aware of this. However, we will contact you before if this is the case to avoid any loss of data.
<p>
</div>
<div class="moleantdiv">
<h2>Stripe. Payments infrastructure for the interent</h2>
<p>
Moleant AB is integrated with Stripe Payment platform. <br>
Stripe is trusted by the millions of businesses of all sizes - from startups to large enterprises. The payment is integrated with Stripe´s powerful API.<br>
Moleant AB does not store any credit card details and noone at Moleant AB have permissions to modify any payment details. 
<p>
</div>

<?php

  # Load the header file
  include("inc/footer.php");
  ?>