<?php

$sroot = realpath(dirname(__FILE__));

/*
if (strrpos($sroot, '\\') != "") {
	# Windows
	$sroot = substr($sroot, 0, strrpos($sroot, '\\'));
	$sroot = $sroot . "\\";
} else {
	# Linux
	$sroot = substr($sroot, 0, strrpos($sroot, '/'));
	$sroot = $sroot . "/";
}
*/

require $sroot . '/config.php';
require $sroot . '/inc/security.php';

if ($debugmode == 1) {
	echo "\nPDO::errorCode(): ", $dbh->errorCode();
}

if (isset($_GET['set'])) {
	$set = sanitize_numeric_string($_GET['set'], 1, 15);
} {
	$set = "Unset";
}

if (isset($_POST['mode'])) {
	if (sanitize_paranoid_string($_POST['mode'], 1, 5) == "save") {
		$mode = "save";
	} else {
		$mode = "Unset";
	}
} else {
	$mode = "Unset";
}

if (isset($_POST['guid'])) {
	$cguid = sanitize_paranoid_string($_POST['guid'], 1, 30);
} else {
	$cguid = "Unset";
}


# Load the header file

define("INMOLEANT", "TRUE"); # Protect the included scripts from being directly referenced by someone.
include($sroot . "/inc/header.php");

?>

<html>
    <head>
        <title>Mockup buy-thingamajig</title>
    </head>
    <body>

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

        <h1>The angels upon high sing - lets go out and buy</h1>
        <p>
            <form>
                <input type="hidden" id="PurchasedSubscriptions" name="PurchasedSubscriptions" value="f17f35b502f0d4d965ef594fe1c9fc0c">
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="mname">Middle name:</label>
                <input type="text" id="mname" name="mname"><br><br>
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br><br>
                
                <input type="button" value="Buy now!!!!! In fact you must!!! Jesus compells you!!!" onclick="CreateAccount(event,document.getElementById('fname').value,document.getElementById('mname').value,document.getElementById('lname').value,document.getElementById('PurchasedSubscriptions').value,document.getElementById('email').value)">
              </form>
        </p>
    </body>
</html>