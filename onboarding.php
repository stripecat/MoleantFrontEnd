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

<h1>Landing onboarding zone page<h1>
</div>
    
    
    


  <?php

  # Load the header file
  include("inc/footer.php");
  ?>