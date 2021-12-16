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
<div class="moleantDiv">


    
    
    <h1>Welcome to WWW.moleant.com</h1>

     <p>
       <h3>Mattias Liljeblomman</h3>
       <p>mattias@moleant.com

    <button type="button" onclick="alert('Hello world!')">Edit profile</button>
</p>

<p>
  Password last changed for 128 days
  <button type="button" onclick="alert('Hello world!')">Change password</button>
</p>


  </div>
</div>
<div class="moleantDiv">
  <h1>Your pladfdfdfdfn</h1>
<div class="row">
  <div class="column3">
    <h2><img src="https://sadiscover.blob.core.windows.net/img/logo.svg" width=48px height=48px align="center"> Moleant Discover</h2>
    <p>
      Automatic documentation, SAM and asset management system. Monthly subscription. Standard level.</p>
    <p>
    <button type="button" onclick="alert('Hello world!')">Manage plan</button>

    </p>
  </div>
  <div class="column3">
    <h2><img src="https://sadiscover.blob.core.windows.net/img/includedplan.svg" width=48px height=48px align="center"> Included in your plan</h2>
    <p>
    <li>1 GB consumption data (52% free) </li>
      <li>100 assets (23 left)</li>

    </p>
  </div>
  <div class="column3">
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


<div class="moleantDiv">

<?php

if (isset($_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_NAME']))
{
  echo "Logged in as: ..." . $_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_NAME'] . "...<br>";
  echo "GUID: " . $_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_ID'] . "<br>";

//echo print_r($_SERVER);

}
elseif ($allowlocalrun == 1)
{
  # Warning: This MUST be removed when system goed into production!!!! 2021-05-07 Erik Zalitis
  $objectid="e7466113-2e01-458c-9c89-acc0b56e215a";
  echo "Logged in as: " . "J Random Cheater with no identity!" . "<br>";
  echo "GUID: " . $objectid . "<br>";
  #define("HTTP_X_MS_CLIENT_PRINCIPAL_ID", "e7466113-2e01-458c-9c89-acc0b56e215a");
  #define("HTTP_X_MS_CLIENT_PRINCIPAL_NAME", "erik@zalitis.se");
}
else
{
  die("You're not logged in, sorry!");
}


    echo "Your SAT:";
    echo print_r($_SESSION);

    ?>
</div>


  <?php

  # Load the header file
  include("inc/footer.php");
  ?>