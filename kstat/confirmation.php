<?php 

$sroot=realpath(dirname(__FILE__));

if (strrpos($sroot, '\\') != "") { 
    # Windows
    $sroot=substr($sroot,0,strrpos($sroot, '\\'));
    $sroot=$sroot."\\";
}
else 
{
    # Linux
    $sroot=substr($sroot,0,strrpos($sroot, '/'));
    $sroot=$sroot."/";
}

require $sroot.'config.php';
require $sroot . 'inc/security.php';
define ("INMOLEANT","TRUE");

# Load the header file.

include($sroot."inc/header.php");

global $dbht;
?>
<div class="row">
<div class="column">
<div class="moleantdiv">

<title>Confirmation</title>
</head>
<body>
    <h1>Thanks for paying!</h1>

<?php
    $order = sanitize_hexdec_string($_GET['order'], 1, 80);
    echo "Ditt ordernummer:" . $order . "...";

// Call the API to get the system details
	// Get a JWT to call the API. One per call as each JWT is locked to one service.

	$jwtraw = Generate_JWT_Token();

	$jwtjson = json_decode($jwtraw);

	$jwt = $jwtjson->jwt;

	# Generate and send the call itself as a JSON call.

	$url = "https://api.moleant.com/account/FinishOrder/";

	$data = [
		'jwt' => $jwt,
        'Ordernumber' => $order
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

/*	if (FALSE === $result) {
		echo ("Error.");
		die("");
	} */

	echo "Returned data from API: " . $result;

?>

</div>
</div>
</div>

</body>

</html>