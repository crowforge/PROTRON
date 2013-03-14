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

<div class="container">
 <div id="myStyle" class="hero-unit">
 <h1>Basic Bootstrap page</h1>
 <p>An example of a Bootstrap page where the page 
    is constructed from three include files - a header, body and footer.
    All of these files can be found in the app/view/public directory</p>
 </div><!-- .hero-unit -->
</div>


