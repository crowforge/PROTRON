<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date: 
 *
 * *************************************** */

/*
 * Checks that the constant is defined this include
 * will only run if it recieves the defined constent
 */
defined('MY_INC_CODE') or die('Access to this file is restricted');

$docname = "DevNotes";

?>

<!-- main page content -->
<div class="wrapper">
<!-- above the containers to push down the footer -->

    <a name="devnotes"></a>
    <div class="container">
    
      <div class="row">
      <h2>Developer Notes</h2>

      <div class="span12 helpDoc">
      <?php 

        // get the markdown file

        $filename = "doc/".$docname.".md";
        if (file_exists($filename))
        { 
          echo Markdown(file_get_contents($filename));
        } 
        else 
        { 
          echo "<pre>none</pre>";
        }

        echo "<br/><p><i>$filename</i></p>"
      ?>

      </div><!-- .row -->
      </div><!-- .span12 -->
    </div><!-- .container -->

    <br/>
    
<!-- keep this at the bottom to push down the footer-->
<div class="push"><!--//--></div>
</div><!-- .wrapper -->
