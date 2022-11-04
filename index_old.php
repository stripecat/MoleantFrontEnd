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
<h1 style="color:#9305b8">Welcome to Moleant</h1>

<div class="moleantdiv">



<p>Working on something</p>


</p>
</div>
</div>
</div>






  <?php

  # Load the header file
  include("inc/footer.php");
  ?>