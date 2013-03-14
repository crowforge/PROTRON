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

/* ****************************************
 *	THE MAIN CONTENT OF THE PAGE IS BELOW
 *
 *  The HTML headers and footers are in
 *  include files that are pulled in here
 *  The HTML below is already within a BOOTSTRAP
 *  container DIV
 *
 * **************************************** */

?>

<!-- main page content -->
<div class="wrapper">
<!-- above the containers to push down the footer -->

<div class="container">
 <div id="myStyle" class="hero-unit">
 <h1>WebAPI&apos;s</h1>
 <p>Using Twitter, Facebook, Google and other API&apos;s</p>
 </div><!-- .hero-unit -->
</div>

<!-- to the edges example -->
<div class="container-fluid colourband1">
     <div class="container">
          <div class="row-fluid">
               <div class="span12">
                         <p>a band of colour</p>
               </div> <!-- .span12 -->
          </div><!-- .row -->
     </div><!-- .container -->
</div><!-- .container-fluid -->

<!-- to the edges example -->
<div class="container-fluid colourband2">
     <div class="container">
          <div class="row-fluid">
               <div class="span12">
                         <p>a band of colour</p>
               </div> <!-- .span12 -->
          </div><!-- .row -->
     </div><!-- .container -->
</div><!-- .container-fluid -->

<!-- keep this at the bottom to push down the footer-->
<div class="push"><!--//--></div>
</div><!-- .wrapper -->
