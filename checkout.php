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

<script>

function CreateAccount(evt, FirstName,MiddleName,LastName,PurchasedSubscriptions,Email) {
							var client = new HttpClient();
							
							client.get('/get-token/?Service=CreateAccount&IntentLock=CREATE', function(response) {

								var xhttp = new XMLHttpRequest();
								xhttp.onreadystatechange = function() {
									if (this.readyState == 4) {

										jsonresponse = JSON.parse(this.responseText);
										if (this.status == 200) {

											// ListServersForSystem();
											assetsRelationsApp.fetchAssetsRelations();
											Vue.$toast.success("Server successfully added");
										} else {
											console.log(jsonresponse);
											Vue.$toast.error(jsonresponse.message + ': ' + jsonresponse.subcode);
										}
									}
								};
								xhttp.open("POST", "https://api.moleant.com/account/CreateAccount/", true);
								xhttp.send("{\"jwt\":\"" + response + "\",\"FirstName\":\"" + FirstName + "\",\"MiddleName\":\"" + MiddleName + "\",\"LastName\":\"" + LastName + "\",\"PurchasedSubscriptions\":\"" + PurchasedSubscriptions + "\",\"Email\":\"" + Email + "\",\"Mode\":\"Create\" }");

							});
						}

</script>

<div class="moleantdiv">

<h2><img src="https://sadiscover.blob.core.windows.net/img/billing.svg" width=48px height=48px align="center"> Enter your payment information</h2>
<p>
Details about your new account login will be send to your email address.
</p>
</div>


<div class="row">
<div class="column">
<div class="moleantdiv">

<form>

  <input type="hidden" id="PurchasedSubscriptions" name="PurchasedSubscriptions" value="f17f35b502f0d4d965ef594fe1c9fc0c">
  
  <input type="text" id="fname" name="fname" value="First name"><br><br>

  <input type="text" id="mname" name="mname" value="Middle name"><br><br>
  
  <input type="text" id="lname" name="lname" value="Last name"><br><br>

  <input type="email" id="email" name="email" value="Email address"><br><br>

  

</div>
</div>



  <div class="column">
<div class="moleantdiv">

<h2>Summary</h2>

<hr>
<p>
Moleant Discover Plan Standard (1GB)
</p>
<p style="font-size:9px">
Subscription. Monthly billed.
</p>
<hr>
<p>Subtotal US$99/mo</p>
<p>TOTAL <b>US$99/mo +tax</b></p>

</div>
</div>
</div>

<div class=moleantdiv>

<p style="font-size:8px">
  By clicking "Agree and subscribe", you agree: You will be charged US$99 (plus tax) monthly and at the end of your one-year term, your subscription will automatically renew monthly until you cancel (price subject to change). No annual commitment required after the first year. Cancel anytime via Moleant Account or Customer Support. Cancel before Jan 22, 2022 to get a full refund and avoid a fee. You also agree to the Terms of Use and the Subscription and Cancellation Terms.

</p>
  
  <button class="button" onclick="CreateAccount(event,document.getElementById('fname').value,document.getElementById('mname').value,document.getElementById('lname').value,document.getElementById('PurchasedSubscriptions').value,document.getElementById('email').value)">Agree and subscribe</button>
</form>
</div>


<?php

# Load the header file
include("inc/footer.php");
?>