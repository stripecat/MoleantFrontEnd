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
<div class="bg-img">
<div class="moleantdiv24">
<img src="https://sadiscover.blob.core.windows.net/img/logo2.png" width="35%">

</div>
<div class="row">
<div class="column2">


<div class="moleantdiv24">



<b><p style="color:#656464;font-size:20px">An IT tool to collect and visualize all your assets from everywhere. Automatic collect everything with a security twist!</p></b>

<button type="button" onclick="window.location.href='/checkout.php';">Try it here</button></p>
</div>
</div>

<div class="column2">
<img src="/image/screens.png" width="100%">
</div>



</div>
</div>
</div>
</div>
</div>
</div>

<div style="background-color:black">

<div class="row">
                    <div class="column3">
                    <div class="moleantdiv24">
                    <h2 style="color:#11db76">COLLECT</h2>
    
                    <p>Install Moleant Engine to automate documentation of all hardware, software, network traffic, indentities and much more. 
</p> 
            </div>
</div>
            <div class="column3">
            <div class="moleantdiv24">
            <h2 style="color:#cc51b7">VISUALIZE</h2>
            <p>Build reports, create system relations, upload images, use RACI-matrix and add log data with the tip of your finger.
</p> 
</p> 
</p> 
            </div>
</div>
            <div class="column3">
            <div class="moleantdiv24">
            <h2 style="color:#d4ac50">CONTROL</h2>
            <p>
Assign roles to co-workers to work with reports or update your documentation and SAM-registry.
</p>
            </div>
            </div>
            </div>

            <div style="background-color:black">
<div class="row">
                    <div class="column2" >
                    
                    <div class="bg-img2">
</div>
</div>
            
<div class="column2" >
                    
                    <div class="moleantdiv24">
                    <h1>FOR YOU?</h1>
                    <b><p style="font-size:18px">An automatic IT documation with reports, software, identities, hardware and much more can be helpful for ...</p></b>

                    <h2 style="color:#11db76">... THE IT OPERATOR</h2>
                    <p>Control of all the asset's hardware, software, certificates, users and network traffic and much more</p>
                    <p>Combine the automatic assets with your log notes, descriptions, uploaded files and link them to systems</p>
                    <br>
                    <br>
                    <h2 style="color:#d4ac50">... THE LICENSE MANAGER</h2>
                    <p>Moleant engine will discover all installed software and sum them all in reports.</p>
                    <p>By combining the software, assets and it´s owners with Discover´s "license tab" you will have a <b>total control</b> of all licensed applications.</p>
                    <br>
                    <br>
                    <h2 style="color:#9305b8">... THE FINACIAL CHIEF</h2>
                    <p>With just a few click you will be able to see the amount of assets, it´s capacities and purchased and installed softwares.</p>
                    <p>By updating the role matrix it´s easy to see who is responsibles for systems within your organization.<p>
                   
            <button type="button" class="buttonwhite" onclick="window.location.href='/checkout.php';">Purchase</button>
</div>
</div>
</div>



<div class="bg-img4">

            <div class="moleantdiv24">
<h1 style="color:white">SOME THINGS WE ARE</h1>
<h1>ESPECIALLY PROUD OF</h1>

</div>

<div class="row">
                    <div class="column4">
                    <div class="moleantdiv">
                    <h2><img src="https://sadiscover.blob.core.windows.net/img/certificate.svg" width=24px height=24px> CERTIFICATES</h2>
                    <p><i>Where</i> the certificate is stored is hard to remember. But it´s even harder to keep track on the expiring date and we all have experience what happend when a cerificate expires.</p> 
                    <p>Moleant Discover will automatically document installed date and expire date.</p>
                  
            

            </div>
</div>
            <div class="column4">
            <div class="moleantdiv">
            <h2><img src="https://sadiscover.blob.core.windows.net/img/synced.svg" width=24px height=24px> LINK RELATIONS</h2>
            <p>Link discovered <b>assets</b> to <b>systems</b>. And systems can be linked to <b>organizations</b>.</p>
            <p>easy peasy. Relationships that last!</p> 

            </div>
</div>
<div class="column4">
            <div class="moleantdiv">
            <h2><img src="https://sadiscover.blob.core.windows.net/img/Responsibilites.svg" width=24px height=24px> RACI MATRIX</h2>
            <p>The description of various roles can be added in your own way.</p>
            <p>By documenting asset's and software's responsibilities will make collaboriations fun ... hopefully.</p>
            </div>
</div>

            <div class="column4">
            <div class="moleantdiv">
                      <h2><img src="https://sadiscover.blob.core.windows.net/img/security.svg" width=24px height=24px> BUILT ON SECURITY</h2>
                    <p>The people behind Moleant breath .. well bleed security. The product is built for security people. Some features:</p>
                    <p>- MFA logins</p>
                    <p>- Role based access</p>
                    <p>- Moleant enigne requires zero permissions</p>
                    <p>- Encrypted data in travel and at rest</p>
            </div>
            </div>
            <div class="moleantdiv24">
            <button type="button" class="buttonwhite" onclick="window.location.href='/checkout.php';">Try the features</button>
            
</div>
            </div>


         
                   
                   

</div>
</div>




</div>


<div style="background-color:white">

<div class="moleantdiv24">
<h2 style="color:black">Our other projects</h1>

</div>

<div class="row">
        <div class="column3">
        <div class="moleantdiv">
        <p>IT-säkerhetspodden</p>
</div>
</div>
<div class="column3">
<div class="moleantdiv">
<p>Cyberdeckarna</p>
</div>
</div>
<div class="column3">
<div class="moleantdiv">
<p>Amigaradion</p>
</div>
</div>


</div>
<button type="button" onclick="window.location.href='mailto:support@moleant.com';">Contact us</button>

<div class="backgroundblack">
<div class="moleantdiv24">
<h1 style="color:#109cbf">ARTICLES</h1>
<p style="color:#d4ac50">Browse through articles in Moleant Support pages</p>
</p>
</div>

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

        <button type="button" onclick="window.location.href='https://support.moleant.com/';">Browse support page</button>
            </div>
            
            

            <div style="background-color:white">
<div class="row">
                  
<div class="column2" >
                    
                    <div class="moleantdiv24">
                    <h2 style="color:black">Ett lite djupare Vad (detaljer)</h2>
                    <p style="color:black">Do you feel in change?</p>

                    <h2 style="color:black">THE IT OPERATOR</h2>
                    <p>somewthing somethin g hererrf</p>
                    <br>
                    <br>
                    <h2 style="color:black">THE LICENSE MANAGER</h2>
                    <p style="color:black">somewthing somethin g hererrf</p>
                    <br>
                    <br>
                    <h2 style="color:black">THE FINACIAL PERSON</h2>
                    <p style="color:black">somewthing somethin g hererrf</p>
                   
            <button type="button" onclick="window.location.href='/checkout.php';">Purchase</button>
</div>
</div> 

<div class="column2" >
                    
                    <div class="bg-img2" style="height:100%">
                   
                   

</div>
</div>



</div>





<?php

  # Load the header file
  include("inc/footer.php");
  ?>