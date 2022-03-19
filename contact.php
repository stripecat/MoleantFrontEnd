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
                    <div class="column2" >
                    <div class="moleantdiv24">
                    <h1>idsfbinoudsiufgdfgniupdfsgi</h1>
</div>
                    <div class="moleantdiv24">
                    <div class="form">
					<div class="form-section">
						<form action="">
							<div class="group">
								<input id="FirstName" name="FirstName" type="text" placeholder="Name" class="control">
							</div>
                            <div class="group">
								<input id="CreationEmail" name="CreationEmail" type="text" placeholder="email address" class="control">
							</div>
							<div class="group">
								<input id="LastName" name="LastName" type="textarea" placeholder="Messege here please" class="control">
							</div>
							
							<div class="group">

								<input type="button" class="button" id="btnCreateUser" onclick="CreateUser(event,document.getElementById('FirstName').value,document.getElementById('LastName').value,document.getElementById('CreationEmail').value)" value="Send">
							</div>
						</form>
					</div>
</div>

                    <div class="column2" >
                        <p>nosdfgidsgdsnof </p>
				</div>
</div>
</div>
</div>




<?php

  # Load the header file
  include("inc/footer.php");
  ?>