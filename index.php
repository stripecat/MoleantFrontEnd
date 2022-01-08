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

<div class="layer"></div>
<div class="layer layer2"></div>
<div class="layer layer3"></div>
<div class="moleantdiv"><p>
<h1><img src="https://sadiscover.blob.core.windows.net/img/logo.svg" width=72px height=72px align="center"> Welcome to Moleant</h1>
</p>
<p>
Deliver of automatic documentation, SAM and asset management system. Monthly subscription. Always up to date.
<p><button type="button" onclick="alert('Contact')">Contact us</button></p>
</p>
</div>
<div>

  <h1>Setup. Collect. Control.</h1>
 
<div class="row">
  <div class="column3">
  <div class="moleantdiv">
    <h2><img src="https://sadiscover.blob.core.windows.net/img/logo.svg" width=48px height=48px align="center"> Setup a subscription</h2>
    <p>
      Setup a monthly. No string attached. Just pure greatness.</p>
    <p>

    <a href="/checkout.php"><button class="button">Create an account</button></a>

    </p>
  </div>
</div>
  <div class="column3">
  <div class="moleantdiv">
    <img src="../image/collect.jpg" width=100% height="100%">
    <p>
    <li>Runt Discover engine on all assets. </li>
      <li>Automatic documentation, SAM and asset management system. Monthly subscription. Standard level. </li>

    </p>
  </div>
</div>
  <div class="column3">
  <div class="moleantdiv">
    <h2><img src="https://sadiscover.blob.core.windows.net/img/billing.svg" width=48px height=48px align="center"> Billing and payment</h2>
    <p>
      <li>MasterCard ending ****0701 </li>
      <li>99 USD/mo
<br>Next payment on Dec 12, 2021, paid monthly</li>
      <li><a href="https://www.w3schools.com/">View billing history</a> </li>
      <p><button type="button" onclick="alert('Hello world!')">Edit billing and payment</button></p>

  </div>
  </div>
</div>

<div class="moleantdiv">
  <div class="divhero2">
<h1>A wallpaper</h1>
<p>iudfniudsf nsdfdf idsf sdfis<br>lorum impso<br><br><br><br><br><br><br></p>
</div>
</div>



  <?php

  # Load the header file
  include("inc/footer.php");
  ?>