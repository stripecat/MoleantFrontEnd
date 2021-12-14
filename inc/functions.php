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

include_once $sroot.'inc/BeforeValidException.php';
include_once $sroot.'inc/ExpiredException.php';
include_once $sroot.'inc/SignatureInvalidException.php';
include_once $sroot.'inc/JWT.php';

use \Firebase\JWT\JWT; 

function Generate_JWT_TOKEN($service="GENERAL",$intentlock="ANY")
{
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

$objectidoverride="";

if ($allowlocalrun==1)
{
    if(!isset($_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_ID']))
    {
        # Warning: This MUST be removed when system goed into production!!!! 2021-05-07 Erik Zalitis
        $objectid="e7466113-2e01-458c-9c89-acc0b56e215a";
        $objectidoverride="e7466113-2e01-458c-9c89-acc0b56e215a"; 
            $num=8;
            $nonce=bin2hex(random_bytes($num));
            $delim="bm9uY2U=";
            $ts=time();
    $token = array(
        "iss" => $iss.$delim.$nonce,
        "aud" => $aud.$delim.$nonce,
        "iat" => $iat.$delim.$nonce,
        "nbf" => $nbf.$delim.$nonce,
        "data" => array(
            "id" => $objectid.$delim.$nonce,
            "firstname" => "".$delim.$nonce,
            "lastname" => "".$delim.$nonce,
            "email" => "erik@zalitis.se".$delim.$nonce,
            "service" => $service.$delim.$nonce,
            "intentlock" => $intentlock.$delim.$nonce,
            "nonce" => "$nonce",
            "timestamp" => $ts.$delim.$nonce,
        )
    );

    // generate jwt
    $jwt = JWT::encode($token, $apikeyseed);
    return json_encode(
            array(
                "message" => "Successful JWT Generation.",
                "jwt" => $jwt
            )
        );


    }

}



if(isset($_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_ID'])){
 
 		$num=8;
 		$nonce=bin2hex(random_bytes($num));
 		$delim="bm9uY2U=";
 		$ts=time();
    $token = array(
       "iss" => $iss.$delim.$nonce,
       "aud" => $aud.$delim.$nonce,
       "iat" => $iat.$delim.$nonce,
       "nbf" => $nbf.$delim.$nonce,
       "data" => array(
           "id" => $_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_ID'].$delim.$nonce,
           "firstname" => "".$delim.$nonce,
           "lastname" => "".$delim.$nonce,
           "email" => $_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_NAME'].$delim.$nonce,
           "service" => $service.$delim.$nonce,
           "intentlock" => $intentlock.$delim.$nonce,
           "nonce" => "$nonce",
           "timestamp" => $ts.$delim.$nonce,
       )
    );

    // generate jwt
    $jwt = JWT::encode($token, $apikeyseed);
    return json_encode(
            array(
                "message" => "Successful JWT Generation.",
                "jwt" => $jwt
            )
        );
 
}
 
// login failed will be here

}


function uploadBlob($filetoUpload, $storageAccount, $containerName, $blobName, $accesskey, $mimetype="application/octet-stream") {
	
	$destinationURL = "https://$storageAccount.blob.core.windows.net/$containerName/$blobName";

    $currentDate = gmdate("D, d M Y H:i:s T", time());
    $handle = fopen($filetoUpload, "r");
    $fileLen = filesize($filetoUpload);

    $headerResource = "x-ms-blob-cache-control:max-age=3600\nx-ms-blob-type:BlockBlob\nx-ms-date:$currentDate\nx-ms-version:2015-12-11";
    $urlResource = "/$storageAccount/$containerName/$blobName";

    $arraysign = array();
    $arraysign[] = 'PUT';               /*HTTP Verb*/  
    $arraysign[] = '';                  /*Content-Encoding*/  
    $arraysign[] = '';                  /*Content-Language*/  
    $arraysign[] = $fileLen;            /*Content-Length (include value when zero)*/  
    $arraysign[] = '';                  /*Content-MD5*/  
    $arraysign[] = $mimetype;         /*Content-Type*/  
    $arraysign[] = '';                  /*Date*/  
    $arraysign[] = '';                  /*If-Modified-Since */  
    $arraysign[] = '';                  /*If-Match*/  
    $arraysign[] = '';                  /*If-None-Match*/  
    $arraysign[] = '';                  /*If-Unmodified-Since*/  
    $arraysign[] = '';                  /*Range*/  
    $arraysign[] = $headerResource;     /*CanonicalizedHeaders*/
    $arraysign[] = $urlResource;        /*CanonicalizedResource*/

    $str2sign = implode("\n", $arraysign);

    $sig = base64_encode(hash_hmac('sha256', urldecode(utf8_encode($str2sign)), base64_decode($accesskey), true));  
    $authHeader = "SharedKey $storageAccount:$sig";
	
    $headers = [
        'Authorization: ' . $authHeader,
        'x-ms-blob-cache-control: max-age=3600',
        'x-ms-blob-type: BlockBlob',
        'x-ms-date: ' . $currentDate,
        'x-ms-version: 2015-12-11',
        'Content-Type: ' . $mimetype,
        'Content-Length: ' . $fileLen
    ];

    $ch = curl_init($destinationURL);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_INFILE, $handle); 
    curl_setopt($ch, CURLOPT_INFILESIZE, $fileLen); 
    curl_setopt($ch, CURLOPT_UPLOAD, true); 
    $result = curl_exec($ch);

    $res=print_r($result);
    $error=print_r(curl_error($ch));
    
    if (strlen($error) < 5) { return "Upload was successful"; }
    else { return "Upload failed."; }

    curl_close($ch);
}
