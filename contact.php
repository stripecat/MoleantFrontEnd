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

<h1>idsfbinoudsiufgdfgniupdfsgi</h1>
<p>iunsdfnods dsfgidsfgoidsfso
</p>

<?php

  # Load the header file
  include("inc/footer.php");
  ?>