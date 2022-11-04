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



<b><p style="color:#656464;font-size:20px">Tired of out of date documentation? Still worring about license cost?</p>
<p style="color:#656464;font-size:20px">Let Moleant Discover automatically collect and visualize all your assets.</p></b>
</div>
<div class="moleantdiv24">
<button type="button" class="buttonbig" onclick="window.location.href='/checkout.php';">Try it here</button></p>
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
    
                    <p>Automatically discover all hardware, software, network traffic, indentities and much more. 
</p> 
            </div>
</div>
            <div class="column3">
            <div class="moleantdiv24">
            <h2 style="color:#cc51b7">VISUALIZE</h2>
            <p>License matching, system relations, upload files, RACI-matrix and log data with the tip of your finger.
</p> 
</p> 
</p> 
            </div>
</div>
            <div class="column3">
            <div class="moleantdiv24">
            <h2 style="color:#d4ac50">CONTROL</h2>
            <p>
Build smart reports, optimize license consumtions and share with co-workers from any device.
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
                    

                    <h2 style="color:#11db76">... THE IT OPERATOR</h2>
                    <p><b>Stop struggling to update documentation</b><br>
                    Discover hardware, software, network traffic, certificates, users and network traffic and much more.<br>
                    Add log notes, descriptions, uploaded files and system relations</p>
                    <br>
                    <br>
                    <h2 style="color:#d4ac50">... THE LICENSE MANAGER</h2>
                    <p><b>Stop worrying about licensing costs</b><br>
                    Use a simple mobile-friendly tool to work with licenses. Match discovered software with purchase license to automatically discover Over or Under licensed</p>
                    <br>
                    <br>
                    <h2 style="color:#9305b8">... THE FINACIAL CHIEF</h2>
                    <p><b>Reconsiled licenses to optimize and distribute software costs.</b><br>
                    Use responsibility matrix to distribute costs and plan budget.</p>
                   
            <button type="button" class="buttonwhitebig" onclick="window.location.href='/checkout.php';">Purchase</button>
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
            <div class="moleantdiv12">
            <button type="button" class="buttonwhitebig" onclick="window.location.href='/checkout.php';">Try the features</button>
            <div class="moleantdiv12">
<button type="button" class="buttonwhitebig" onclick="window.location.href='mailto:support@moleant.com';">Contact us</button>
</div>
            
</div>
            </div>


         
                   
                   

</div>
</div>




</div>


<div style="background-color:white">

<div class="moleantdiv12">
<h1 style="color:#109cbf">OUR OTHER PROJECTS</h1>

</div>

<div class="row">
        <div class="column3">
        <div class="moleantdiv12">
        <img src="/image/itsakerhetspodden.png" width="100%">
        <p style="color:#656464;font-size:10px"><i>One of Swedens biggest podcast in technology and in particular cybersecurity</i></p>
</div>
</div>
<div class="column3">
<div class="moleantdiv12">
<img src="/image/flashback.png" width="100%">
<p style="color:#656464;font-size:10px"><i>The last true tracker broadcaster. A radio. A podcast.</i></p>
</div>
</div>
<div class="column3">
<div class="moleantdiv12">
<img src="/image/cyberdeckarna.png" width="100%">
<p style="color:#656464;font-size:10px"><i>A book for children. Two detectives solving cybersecurity related crimes.</i></p>
</div>
</div>


</div>

<div class="backgroundblack">
<div class="moleantdiv12">
<h1 style="color:#109cbf">FREQUENTLY ASKED QUESTIONS</h1>
<p style="color:#d4ac50">Knowledge base, articles and support all in one place ...</p>

</div>

<div class="row">
         
        <?php


        $req=null;


$url="https://support.moleant.com/article-category/faq/rss/";

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
        <div class="moleantdiv12">
        <button type="button" class="buttonwhitebig" onclick="window.location.href='https://support.moleant.com/';">Browse support page</button>
</div>      
      </div>
            
            

    


</div>





<?php

  # Load the header file
  include("inc/footer.php");
  ?>