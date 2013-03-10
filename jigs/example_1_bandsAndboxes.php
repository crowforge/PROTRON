<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>PROTRON</title>
            <meta name="description" content="Lecture examples">
            <meta name="author" content="Conor O&amp;Reilly">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- because jigs (code examples) are in the jigs folder they need ../ placed infront
            of pathnames to files they reference so if you copy these files make sure
            that your path names are correct. If you care copying an example to a folder
            above the jigs folder then just remove the ../ fron the path as this means go
            back a directory before going into a named directory. So use:

            <link href="../css/examples/examples_0_basic.css" rel="stylesheet"/>

            if it is moved then it is at the same level as the directorty and so there
            is no need to have ../ if you see ./ this is ok as it means this current
            folder that the file is in. So if at the same level as the css folder use:

            <link href="css/examples/examples_0_basic.css" rel="stylesheet"/>

            DON'T forget the path to the javascript files at the end of the body also
            need to be changed e.g.

            <script src="../lib/bootstrap_v230/js/bootstrap.min.js"></script>

            would become:

            <script src="lib/bootstrap_v230/js/bootstrap.min.js"></script>
            -->

            <!-- do not touch this one -->
            <link href="../lib/bootstrap_v230/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="../lib/bootstrap_v230/css/bootstrap-responsive.min.css" rel="stylesheet"/>
            
            <!-- Your styles go in here-->
            <link href="../css/examples/examples_0_basic.css" rel="stylesheet"/>
            <link href="../css/examples/examples_1_bandsAndboxes.css" rel="stylesheet"/>

            <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        </head>

        <body>
            <!-- stationary nav bar -->
            <div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="#">PROTRON</a>
                  <div class="nav-collapse">
                    <ul class="nav">
                      <li class="active"><a href="#">Home</a></li>
                      <li><a href="#about">About</a></li>
                      <li><a href="#contact">Contact</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div>
              </div>
            </div>
            

            <!-- main page content -->

            <!-- testcard button -->
            <p align="right"><a href="../testcard.php" class="btn btn-success btn-large">
              <i class="icon-white icon-arrow-left"></i> back to testcard</a></p>

            <!-- HERO UNIT -->
            <div class="container">
                <div id="myStyle" class="hero-unit">
                    <h1>Example 1</h1>
                    </br>
                    <h2>Bands and Boxes</h2>
                    <p>Bootstrap has a built in grid system that uses CSS classes</p>
                    <ul>
                        <li>container</li>
                        <li>row</li>
                        <li>span1, span2, ... up to span12 to define columns</li>
                    </ul>
                    <p>Setting started with bootstrap 
                        <a href="http://www.onextrapixel.com/2012/11/12/how-to-use-twitter-bootstrap-to-create-a-responsive-website-design/">one extra pixel article </a>
                    </p>
                </div><!-- .hero-unit -->
            </div><!-- .container -->

            <!-- FIRST ROW -->
            <div class="container">
                <div class="row">

                     <div class="span4">
                     <h2>Example 1</h2>
                     <p>This example illustrates ...</p>
                     <p><a class="btn" href="#">See Example</a></p>
                     </div><!-- .span4 -->
               
                     <div class="span4">
                     <h2>Example 2</h2>
                     <p>This example illustrates ...</p>
                     <p><a class="btn" href="#">See Example</a></p>
                     </div><!-- .span4 -->
               
                     <div class="span4">
                     <h2>Example 3</h2>
                     <p>This example illustrates ...</p>
                     <p><a class="btn" href="#">See Example</a></p>
                     </div><!-- .span4 -->

                </div><!-- .row -->
            </div><!-- .container -->
            <br/>

           <!-- SECOND ROW -->
           <!-- to theedges example -->
            <div class="container-fluid twitter">
                 <div class="container">
                      <div class="row-fluid">
                           <div class="span12">
                                     <p>A BAND of colour</p>
                           </div> <!-- .span12 -->
                      </div><!-- .row -->
                 </div><!-- .container -->
            </div><!-- .container-fluid -->

            </br> <!-- add a line break, to seperate the blocks -->

           <!-- THIRD ROW -->
           <!-- off the edges example -->
            <div class="container twitter">
                 <div class="row">
                      <div class="span12">
                                <p>A BOX of colour</p>
                      </div> <!-- .span12 -->
                 </div><!-- .row -->
            </div><!-- .container -->

            </br>

            <!-- FORTH and FIFTH ROW -->
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

            <!-- footer -->
            </br>
            <div class="container">
            <div class="row">
                <footer>
                    <p>&copy; Conor O&apos;Reilly 2013</p>
                </footer>
            </div><!-- .row -->
            </div><!-- .container -->

            <!-- have at the bottom of the page to speed up loading -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <!-- the link below to the CDN links to the latest version of jquery each time BUT
            this is a bad idea 
                1) the caching only works if you specify a version number
                2) deploy with only what you have tested with
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            -->
            <script src="../lib/bootstrap_v230/js/bootstrap.min.js"></script>

            <!-- for twitter and other social API's-->
            <!-- this code styles the twitter buttons and timelines -->
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </body>
    </html>

    