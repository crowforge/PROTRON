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
 <h1>WebAPI&apos;s</h1>
 <p>Using Twitter, Facebook, Google and other API&apos;s</p>
 </div><!-- .hero-unit -->
</div>


<div class="jumbotron">
          <h1>Twitter API's</h1>
</div>

<!-- 
     The container-fluid class lets the row colour go right to the edge
     if just container is used then there will be padding to the left and right 
-->

     <div class="container-fluid twitter">
     <div class="container">
          <div class="row">

               <div class="span4">
               <h2>Twitter Buttons</h2>
               <p><a href="https://twitter.com/crowforgedev" 
                    class="twitter-follow-button" data-show-count="false">Follow @crowforgedev</a></p>

               <p><a href="https://twitter.com/share" 
                    class="twitter-share-button" data-via="crowforgedev" data-size="large">Tweet</a></p>

               <p><a href="https://twitter.com/intent/tweet?button_hashtag=edutech" 
                    class="twitter-hashtag-button" data-related="crowforgedev">Tweet #edutech</a></p>

               <p><a href="https://twitter.com/intent/tweet?screen_name=crowforgedev" 
                    class="twitter-mention-button" data-related="crowforgedev">Tweet to @crowforgedev</a></p>

               </div><!-- .span4 -->

               <div class="span4">
               <!-- <h2>Example 2</h2>
               <p>This example illustrates ...</p>
               <p><a class="btn" href="#">See Example</a></p> -->
               </div><!-- .span4 -->

               <div class="span4">
               <!-- <h2>Example 3</h2>
               <p>This example illustrates ...</p>
               <p><a class="btn" href="#">See Example</a></p> -->
               </div><!-- .span4 -->

          </div><!-- .row -->

          <div class="row">

               <div class="span4">
               <h2>My Tweets</h2>
               <p><a class="twitter-timeline"  
                     href="https://twitter.com/crowforgedev"  
                     data-widget-id="308732289569923072">Tweets by @crowforgedev</a></p>
               </div><!-- .span4 -->

               <div class="span4">
               <h2>Search single hashtag</h2>
               <p><a class="twitter-timeline"  
                     href="https://twitter.com/search?q=%23education"  
                     data-widget-id="308741511858765824">Tweets about "#education"</a></p>
               </div><!-- .span4 -->

               <div class="span4">
               <h2>List of authors</h2>
               <p><a class="twitter-timeline"  
                     href="https://twitter.com/crowforgedev/development"  
                     data-widget-id="308746232547917824">Tweets from @crowforgedev/development</a></p>
               </div><!-- .span4 -->

          </div><!-- .row -->
     </div><!-- .container -->
</div><!-- .container-fluid -->

</br>
<!-- to theedges example -->
<div class="container-fluid twitter">
     <div class="container">
          <div class="row-fluid">
               <div class="span12">
                         <p>a band of colour</p>
               </div> <!-- .span12 -->
          </div><!-- .row -->
     </div><!-- .container -->
</div><!-- .container-fluid -->

</br>
<!-- off the edges example -->
<div class="container twitter">
     <div class="row">
          <div class="span12">
                    <p>a band of colour</p>
          </div> <!-- .span12 -->
     </div><!-- .row -->
</div><!-- .container -->

