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
<div class="moleantdiv24">
<h1 style="color:#9305b8">Welcome to Moleant</h1>
</div>
<div class="column3">


<div class="moleantdiv24">



<p style="color:black">Skriv vad det är men nån mening eller så</p>

<button type="button" onclick="window.location.href='/checkout.php';">Start for free</button></p>

</div>
</div>
</div>

<div style="background-color:#e8e8e8">

<div class="row">
                    <div class="column3">
                    <div class="moleantdiv">
                    <h2 style="color:#11db76"><img src="https://sadiscover.blob.core.windows.net/img/enginewhite.svg" width=48px height=48px align="center">   COLLECT</h2>
    
                    <p>Install Moleant Engine to automate documentation of all hardware, software, certificates, indentities and much more. 
</p> 
            </div>
</div>
            <div class="column3">
            <div class="moleantdiv">
            <h2 style="color:#cc51b7"><img src="https://sadiscover.blob.core.windows.net/img/visualize.svg" width=48px height=48px align="center">   VISUALIZE</h2>
            <p>Build reports, create system relations, upload images, use RACI-matrix and add log data with the tip of your finger.
</p> 
</p> 
</p> 
            </div>
</div>
            <div class="column3">
            <div class="moleantdiv">
            <h2 style="color:#d4ac50"><img src="https://sadiscover.blob.core.windows.net/img/control.svg" width=48px height=48px align="center">   CONTROL</h2>
            <p>
Assign roles to co-workers to work with reports or update your documentation and SAM-registry.
</p>
            </div>
            </div>
            </div>



            <div style="background-color:black">

            <div class="moleantdiv24">
<h2 style="color:white">why</h1>
<p style="color:white">Discover is a Documentation application with <b>security</b> focus - a Security Software Asset Managemt (sSAM) if you will!
</p>
</div>

<div class="row">
                    <div class="column4">
                    <div class="moleantdiv">
                    <p>uinsdfgindsginudsfginu</p>
            </div>
</div>
            <div class="column4">
            <div class="moleantdiv">
            <p>uinsdfgindsginudsfginu</p>
            </div>
</div>
<div class="column4">
            <div class="moleantdiv">
            <p>ddkkkldd</p>
            </div>
</div>

            <div class="column4">
            <div class="moleantdiv">
            <p>uinsdfgindsginudsfginu</p>
            </div>
            </div>
            <div class="moleantdiv24">
            <button type="button" class="buttonwhite" onclick="window.location.href='/checkout.php';">Explore plans</button>
</div>

            </div>


            <div style="background-color:white">
<div class="row">
                    <div class="column2" >
                    
                    <div class="bg-img2" style="height:100%">
                   
                   

</div>
</div>
<div class="column2" >
                    
                    <div class="moleantdiv24">
                    <h2 style="color:black">För VEM - berätta!!</h2>
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
                    <div class="moleantdiv24">
            <button type="button" onclick="window.location.href='/checkout.php';">Purchase</button>
</div>
</div>
</div> 



</div>




<?php

  # Load the header file
  include("inc/footer.php");
  ?>