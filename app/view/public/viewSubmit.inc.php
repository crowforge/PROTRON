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

<div class="wrapperNoColour">
<!-- main page content -->

<div class="container">

	<div class="page-header">  
	    <h1>Submit Test</h1>
	    <p>The data submitted by the form</p>  
	</div> 

	<div class="row">
		<div class="span12">
		<!-- Just dumps the parameters sent by a form submit -->
		<pre><? print_r($_REQUEST); ?></pre>
		</div>
	</div>
 
</div>

<!-- keep this at the bottom to push down the footer-->
<div class="push"><!--//--></div>
</div><!-- .wrapper -->
