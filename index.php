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

<button type="button" onclick="window.location.href='/checkout.php';">Purchase a subscription</button></p>

<p style="font-size:8px">
  By clicking "Agree and subscribe", you agree: You will be charged US$99 (plus tax) monthly and at the end of your one-year term, your subscription will automatically renew monthly until you cancel (price subject to change). No annual commitment required after the first year. Cancel anytime via Moleant Account or Customer Support. Cancel before Jan 22, 2022 to get a full refund and avoid a fee. You also agree to the Terms of Use and the Subscription and Cancellation Terms.

</p>
</div>
</div>
</div>
<div style="background-color:#7d8ead">
<div class="row">
                    <div class="column3" >
                    <div class="moleantdiv" style="background-color:black">
                    <h2 style="color:#11db76"><img src="https://sadiscover.blob.core.windows.net/img/enginewhite.svg" width=48px height=48px align="center">   COLLECT</h2>
    
                    <p style="color:white">Install Moleant Engine on all your assets to automate your hardware and software documentations. 
</p> 
            </div>
</div>
            <div class="column3">
            <div class="moleantdiv" style="background-color:black">
            <h2 style="color:#cc51b7"><img src="https://sadiscover.blob.core.windows.net/img/visualize.svg" width=48px height=48px align="center">   VISUALIZE</h2>
            <p style="color:white">Use the modern responsive interface to build reports, link systems and users to your assets. Upload images, use RACI-matrix and add log data with just your fingertip.
</p> 
</p> 
</p> 
            </div>
</div>
            <div class="column3">
            <div class="moleantdiv" style="background-color:black">
            <h2 style="color:#d4ac50"><img src="https://sadiscover.blob.core.windows.net/img/control.svg" width=48px height=48px align="center">   CONTROL</h2>
            <p style="color:white">
Assign roles to co-workers to work with reports or update your documentation and SAM-registry.
</p>
            </div>
            </div>
            </div>

<div class="backgroundblack">
<p>
<h1 style="color:#109cbf">ARTICLES</h1>
<h2 style="color:#d4ac50">Browse through articles in Moleant Support pages</h2>
</p>

<div class="row">
         
        <?php


        $req=null;


$url="https://support.moleant.com/blogg/rss/";

$arrContextOptions=array(
  "ssl"=>array(
      "verify_peer"=>false,
      "verify_peer_name"=>false,
  ),
);  

/* 

This is what should be the solution in the future.

$arrContextOptions= [
    'ssl' => [
        'cafile' => '/path/to/bundle/cacert.pem',
        'verify_peer'=> true,
        'verify_peer_name'=> true,
    ],
];

*/

$max=150;
$ellipsis=str_repeat('.',3);
$req=null;
$context  = stream_context_create($req);

set_error_handler(
  function ($severity, $message, $file, $line) {
      throw new ErrorException($message, $severity, $severity, $file, $line);
  }
);

try {
  $rss2 = @file_get_contents($url, false, stream_context_create($arrContextOptions));
}
catch (Exception $e) {
  echo $e->getMessage();
}

restore_error_handler();

$doc=simplexml_load_string($rss2);


foreach ($doc->channel->item as $item) 
{
 #echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";


$description= $item->description;

 echo '<ul>';

     try{
         #$description=$xp->evaluate('string(description)',$node);
         if( strlen( $description ) > $max )$description=substr( $description, 0, $max ) . $ellipsis;

         $category=$item->category;
         $link=$item->link;
         $title=$item->title;
         $author=$item->pubDate;
         #$xp->evaluate( 'string(category)', $node );

         printf( 
             '
             
             <div class="column3">
             <div class="moleantdiv" style="min-height:200px">
             <h2><a href="%s" target="_blank">%s</a></h2>
                 Published: <i>%s</i><br>
                 %s
             
             </div>
             </div>'
             
,
             $link,
             $title,
             $author,
             $description,
         );
     }catch( Exception $e ){
         continue;
     }
 

 echo '</ul>';







}            
        ?>

        </div>
            </div>

            <div style="background-color:#f2f2f2">
<div class="row">
                    <div class="column2" >
                    <div class="moleantdiv" style="background-color:black">
                    <h2 style="color:#11db76">COLLADD IMAGE HERE</h2>
</div>
</div>
<div class="column2" >
                    <div class="moleantdiv" style="background-color:black">
                    <h2 style="color:#11db76">Moleant Discovery let you take charge of your data.</h2>
                    <p>Do you feel in change?</p>

                    <h2>THE IT OPERATOR</h2>
                    <p style="color:white">somewthing somethin g hererrf</p>
</div>
</div> 





  <?php

  # Load the header file
  include("inc/footer.php");
  ?>