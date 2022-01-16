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
define("INONBOARDING", "FALSE");

# Load the header file

include("inc/header.php");

?>
    
    <div class="moleantdiv">
        <form method='post'>
            <select name='name' style="color:black">
                <optgroup label='IT-SÄKERHETSPODDEN'>
                    <option>https://itsakerhetspodden.libsyn.com/rss
                    
                </optgroup>
                
            </select>
            <button><input type='submit' style="button"></button>

           
</div>
        </form>
        <?php
            if( $_SERVER['REQUEST_METHOD']=='POST' && !empty( $_POST['name'] ) ){

                $url=$_POST['name'];
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
                                <div class="row">
                                <div class="column3">
                                <div class="moleantdiv">
                                <h2><a href="%s" target="_blank">%s</a></h2>
                                     %s
                                    %s
                                
                                </div>
                                </div>
                                </div>'
                                
                ,
                                $xp->evaluate( 'string(link)', $node ),
                                $xp->evaluate( 'string(title)',$node ),
                                $category,
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
            }
        ?>
    <?php

# Load the header file
include("inc/footer.php");
?>