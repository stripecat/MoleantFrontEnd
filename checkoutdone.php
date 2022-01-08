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




<div class="row">
<div class="bg-img">
<div class="column3">

<div class="moleantdiv">


<h1 style="color:#9305b8">Thank you!</h1>
<p>Thank you for puchasing Moleant Discover.</p>

<p>Please check your email to complete the onboarding process.</p>

<p style="font-size:8px">
  By clicking "Agree and subscribe", you agree: You will be charged US$99 (plus tax) monthly and at the end of your one-year term, your subscription will automatically renew monthly until you cancel (price subject to change). No annual commitment required after the first year. Cancel anytime via Moleant Account or Customer Support. Cancel before Jan 22, 2022 to get a full refund and avoid a fee. You also agree to the Terms of Use and the Subscription and Cancellation Terms.

</p>
</div>
</div>
</div>
</div>


<script>
  		Vue.use(VueToast, {
			position: 'bottom'
		});
    </script>

<?php

# Load the header file
include("inc/footer.php");
?>