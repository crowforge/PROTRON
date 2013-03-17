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

?>

<!--  button -->
<div class="container buttonbar">
<p align="right">
  <a href="twitter_post.php" class="btn btn-success btn-large">A Tweet</a>
  <a href="twitter_postForm.php" class="btn btn-success btn-large">A Tweet Form : PHP</a>
  <a href="twitter_postFormAJAX.php" class="btn btn-success btn-large">A Tweet Form : AJAX</a>
  <a href="twitter_postFormJQueryAJAX.php" class="btn btn-success btn-large">A Tweet Form : JQuery AJAX</a>
</p>
</div>

<div class="jumbotron">
          <h1>Twitter API's</h1>
</div>


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
        <h2>Twitter Links of Interest</h2>
        <p>The Twubs site where hashtags are catagorised</p>
        <p><a class="btn" href="http://twubs.com/p/hashtag-directory">TWUBS site</a></p>
        <p>Hastag analyitics</p>
        <p><a class="btn" href="http://analytics.topsy.com/">TOPSY site</a></p>
        <p><a class="btn" href="http://analytics.topsy.com/?q=webdesign%2Cux%2Chtml5&period=1%20month"> TOPSY example</a></p>
        
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

<div class="container twitter">

<!-- additional properties have been added to these buttons based on twitter
     documentation at https://dev.twitter.com/docs/tweet-button
 -->

  <div class="row">

       <div class="span4">
       <h2>Twitter Buttons</h2>
       <p><a href="https://twitter.com/crowforgedev" 
            class="twitter-follow-button" 
            data-show-count="false"
            data-size="large">Follow @crowforgedev</a></p>

       <p><a href="https://twitter.com/share" 
            class="twitter-share-button" 
            data-via="crowforgedev" 
            data-size="large">Tweet</a></p>

       <p><a href="https://twitter.com/intent/tweet?button_hashtag=edutech" 
            class="twitter-hashtag-button" 
            data-related="crowforgedev"
            data-size="large">Tweet #edutech</a></p>

       <p><a href="https://twitter.com/intent/tweet?screen_name=crowforgedev" 
            class="twitter-mention-button" 
            data-related="crowforgedev"
            data-size="large">Tweet to @crowforgedev</a></p>

       </div><!-- .span4 -->

        <div class="span4">
        
            <h2>Twitter Development links</h2>
            <ul>
                <li>  
                    <a href="https://dev.twitter.com/docs/tweet-button">Style Twitter buttons</a>
                </li>
                <li>
                    <a href="http://net.tutsplus.com/tutorials/php/how-to-authenticate-users-with-twitter-oauth/">Authenticate Users with Twitter OAuth</a>
                </li>
                <li>
                    <a href="http://140dev.com/twitter-api-programming-blog/category/tutorials/">140DEV twitter tutorials</a>
                </li>
            </ul>
            
        </div><!-- .span4 -->
  </div><!-- .row -->

  <div class="row">

       <div class="span4">
       <h2>#UX #UI hashtags</h2>
       <p><a href="https://twitter.com/search?q=%23UX+%23UI"
             class="twitter-timeline"  data-widget-id="310377510787489792">Tweets about "#UX #UI"</a></p>
       </div><!-- .span4 -->

       <div class="span4">
       <h2>Paul Irish</h2>
       <p><a href="https://twitter.com/paul_irish"  
             class="twitter-timeline"  
             data-widget-id="310379773274767363">Tweets by @paul_irish</a></p>
       </div><!-- .span4 -->

       <div class="span4">
       <h2>Web design tweets</h2>
       <p><a <a class="twitter-timeline"  
                href="https://twitter.com/search?q=%23webdesign+%23inspiration"  
                data-widget-id="310384968515854336">Web Design Tweets</a></p>
        <p>possible hashtags: #inspiration #webdevelopment #webdesign #webdesigner #typography #cms</p>
       </div><!-- .span4 -->

      </div><!-- .row -->
 </div><!-- .container -->            

 <!-- Twitter JS -->
 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 

