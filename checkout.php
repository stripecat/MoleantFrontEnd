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

<h2><img src="https://sadiscover.blob.core.windows.net/img/billing.svg" width=48px height=48px align="center"> Enter your payment information</h2>
<p>
Details about your new account login will be send to your email address.
</p>
</div>

<div class="column">
<div class="moleantdiv">

<form action="/action_page.php">
  
  <input type="text" id="fname" name="fname" value="First name"><br><br>

  <input type="text" id="lname" name="lname" value="Middle name"><br><br>
  
  <input type="text" id="lname" name="lname" value="Last name"><br><br>

  <input type="email" id="lname" name="lname" value="Email address"><br><br>

  <p style="font-size:8px">
  By clicking "Agree and subscribe", you agree: You will be charged US$99 (plus tax) monthly and at the end of your one-year term, your subscription will automatically renew monthly until you cancel (price subject to change). No annual commitment required after the first year. Cancel anytime via Moleant Account or Customer Support. Cancel before Jan 22, 2022 to get a full refund and avoid a fee. You also agree to the Terms of Use and the Subscription and Cancellation Terms.

</p>
  
  <a href="/checkout.php"><button class="button">Agree and subscribe</button></a>
</form>

</div>
</div>
</div>

<?php

# Load the header file
include("inc/footer.php");
?>