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

<div class="backgroundblack">
<p>
<h1 style="color:#109cbf">Articles</h1>
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
            <div class="moleantdiv">
                <div class="row">
                    <div class="column4">
                        <h2>SETUP</h2>
            </div>
            <div class="column4">
                        <h2>COLLECT</h2>
            </div>
            <div class="column4">
                        <h2>CONTROL</h2>
            </div>
            </div>
            </div>





  <?php

  # Load the header file
  include("inc/footer.php");
  ?>