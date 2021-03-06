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
											window.location.replace("checkoutdone.php");
											Vue.$toast.success("Account successfully created");
										} else {
											console.log(jsonresponse);
											Vue.$toast.error(jsonresponse.message + ': ' + jsonresponse.subcode);
										}
									}
								};
								xhttp.open("POST", "https://api.moleant.com/account/CreateAccount/", true);
								xhttp.send("{\"jwt\":\"" + response + "\",\"FirstName\":\"" + FirstName + "\",\"MiddleName\":\"" + MiddleName + "\",\"LastName\":\"" + LastName + "\",\"PurchasedSubscriptions\":[\"" + PurchasedSubscriptions + "\"],\"Email\":\"" + Email + "\",\"Mode\":\"Create\" }");

							});
						}

</script>

<div class="moleantdiv">

<h2><img src="https://sadiscover.blob.core.windows.net/img/billing.svg" width=48px height=48px align="center"> Enter your payment information</h2>
<p>
Details about your new account login will be send to your email address.
</p>
</div>


<?php


// Call the API to get the system details
	// Get a JWT to call the API. One per call as each JWT is locked to one service.

	$jwtraw = Generate_JWT_Token();

	$jwtjson = json_decode($jwtraw);

	$jwt = $jwtjson->jwt;

	# Generate and send the call itself as a JSON call.

	$url = "https://api.moleant.com/account/CreateOrder/";

	$data = [
		'jwt' => $jwt
	];

	$json_data = json_encode($data);

	#echo print_r($json_data);

	$jsonreq = array(
		'http' => array(
			'method'  => 'POST',
			'content' => $json_data,
			'header' =>  "Host: api.moleant.com\r\n" .
				"Content-Type: application/json\r\n"
		)

	);

	$context  = stream_context_create($jsonreq);

	#echo "Context:".$context; 

	$result = @file_get_contents($url, false, $context);

	if (FALSE === $result) {
		echo ("Error.");
		die("");
	}

	#echo "Kodat svar: ".$result."."; 

	#$resultdec = json_decode($result);

	#print_r($resultdec);

	#$description = $resultdec->ServerDetailCard[0]->Description;

?>


<div class="row">
<div class="column">
<div class="moleantdiv">

<html>


<textarea style="display: none" id="KCO">

<?php

# This part, between the textarea-tags has to be populated with the generated response from Klarna.
# Every call generates a new request, so please don't put this as the front page of the page :)
# Also good to have a nofollow in the robots text. Otherwise Google will start messing
# with our API and then with Klarna, and they don't want that.

echo $result;

?>

</textarea>

<script>

function CreateOrder(evt, purchase_country, coupon) {
							var client = new HttpClient();

							document.getElementById('KCO').innerHTML='<h1>Please standby...</h1>';
							
							client.get('/get-token/?Service=CreateOrder&IntentLock=CREATE', function(response) {

								var xhttp = new XMLHttpRequest();
								xhttp.onreadystatechange = function() {
									if (this.readyState == 4) {


										if (this.status == 200) {
											//Vue.$toast.success("Account successfully created");
											document.getElementById('KCO').innerHTML=this.responseText;

											var checkoutContainer = document.getElementById('my-checkout-container')
											checkoutContainer.innerHTML = (document.getElementById("KCO").value).replace(/\\"/g, "\"").replace(/\\n/g, "");
											var scriptsTags = checkoutContainer.getElementsByTagName('script')
											for (var i = 0; i < scriptsTags.length; i++) {
												var parentNode = scriptsTags[i].parentNode
												var newScriptTag = document.createElement('script')
												newScriptTag.type = 'text/javascript'
												newScriptTag.text = scriptsTags[i].text
												parentNode.removeChild(scriptsTags[i])
												parentNode.appendChild(newScriptTag)
											}


										} else {
											console.log(this.responseText);
											//Vue.$toast.error(jsonresponse.message + ': ' + jsonresponse.subcode);
										}
									}
								};
								xhttp.open("POST", "https://api.moleant.com/account/CreateOrder/", true);
								xhttp.send("{\"jwt\":\"" + response + "\",\"purchase_country\":\"" + purchase_country + "\",\"coupon\":\"" + coupon + "\" }");

							});
						}

</script>


	<div id="my-checkout-container"></div>

</html>

	<!-- START - Dont edit -->
	<script type="text/javascript">
		var checkoutContainer = document.getElementById('my-checkout-container')
		checkoutContainer.innerHTML = (document.getElementById("KCO").value).replace(/\\"/g, "\"").replace(/\\n/g, "");
		var scriptsTags = checkoutContainer.getElementsByTagName('script')
		for (var i = 0; i < scriptsTags.length; i++) {
			var parentNode = scriptsTags[i].parentNode
			var newScriptTag = document.createElement('script')
			newScriptTag.type = 'text/javascript'
			newScriptTag.text = scriptsTags[i].text
			parentNode.removeChild(scriptsTags[i])
			parentNode.appendChild(newScriptTag)
		}
	</script>
	<!-- END -->

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


<script>
  		Vue.use(VueToast, {
			position: 'bottom'
		});
    </script>

<?php

# Load the header file
include("inc/footer.php");
?>