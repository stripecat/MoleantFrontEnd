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
</div>

<div class="row">
         
        <?php
            

                $url="https://support.moleant.com/rss/";
                $max=150;
                $ellipsis=str_repeat('.',3);




                $dom=new DOMDocument;
                $dom->load( $url );

                $xp=new DOMXPath( $dom );
                $col=$xp->query( '//channel/item' );

                if( $col->length > 0 ){


                    echo '<ul>';

                    foreach( $col as $node ){
                        try{
                            $description=$xp->evaluate('string(description)',$node);
                            if( strlen( $description ) > $max )$description=substr( $description, 0, $max ) . $ellipsis;

                            $category=$xp->evaluate( 'string(category)', $node );

                            printf( 
                                '
                                
                                <div class="column3">
                                <div class="moleantdiv" style="min-height:200px">
                                <h2><a href="%s" target="_blank">%s</a></h2>
                                    Author: <i>%s</i><br>
                                    %s
                                
                                </div>
                                </div>'
                                
                ,
                                $xp->evaluate( 'string(link)', $node ),
                                $xp->evaluate( 'string(title)',$node ),
                                $xp->evaluate( 'string(dc:creator)',$node ),

                                $description
                            );
                        }catch( Exception $e ){
                            continue;
                        }
                    }

                    echo '</ul>';

                } else {
                    echo 'nothing found for given XPath query';
                }
            
        ?>

        </div>





  <?php

  # Load the header file
  include("inc/footer.php");
  ?>