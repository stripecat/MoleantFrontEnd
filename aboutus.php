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
<h1>About Us</h1>

<h2>The team behind Moleant</h2>
<p>
We have been working too long in the IT business and far too long thought about the tool we really like to use. Finally after developing since 2018 we are ready to show Moleant Discovery to you.
</div>
<div class="moleantdiv">
 

<h2>Love to document but make it faster</h2>
<p>
We love to do the documentation. We really understand the importance of documentating complex IT but to be honest - writing down all the Gigabytes and OS versions is quite booring. 
And since it tend to change quickly it becomes out of date. 
<br>
So we wanted to create a tool that do all this automatically. Keep up the hardware and software details automatically but also
is able to create your own twist like adding documents, RACI-matrix and descriptions.

</p>

</div>

<div class="moleantdiv">
 <h2>Meet the team behind Moleant</h2>
</div>
<div class="moleantdiv">
    <h3>Mattias Jadesköld</h3>
    <p>Certified IT architect, CEO, FrontEnd</p>
    <button type="button" class="buttonbig" onclick="window.location.href='mailto:mattias@moleant.com';">Email</button>
    <button type="button" class="buttonbig" onclick="window.location.href='https://www.linkedin.com/in/mattias-jadesk%C3%B6ld-229baa1b';">LinkedIn</button>
   
  </div>

  <div class="moleantdiv">
    <h3>Erik Zalitis</h3>
    <p>Certified Security specialist (CISSP and Ethical Hacker), CFO, BackEnd</p>
    <button type="button" class="buttonbig" onclick="window.location.href='mailto:erik@moleant.com';">Email</button>
    <button type="button" class="buttonbig" onclick="window.location.href='https://www.linkedin.com/in/erikzalitis';">LinkedIn</button>
</div>
</div>




<?php

  # Load the header file
  include("inc/footer.php");
  ?>