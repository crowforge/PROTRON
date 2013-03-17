<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>PROTRON</title>
            <meta name="description" content="Lecture examples">
            <meta name="author" content="Conor O&amp;Reilly">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- do not touch this one -->
            <link href="lib/bootstrap_v230/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="lib/bootstrap_v230/css/bootstrap-responsive.min.css" rel="stylesheet"/>
            
            <!-- Your styles go in here-->
            <link href="css/examples/example_0_basic.css" rel="stylesheet"/>

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
                  </a>
                  <a class="brand" href="#">TESTCARD</a>
                  <div class="nav-collapse">
                    <ul class="nav">
                      <li><a href="index.php">Home</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div>
              </div>
            </div>
            
            <!-- main page content -->
            <div class="container">
         
             <div id="myStyle" class="hero-unit">
             <h1>Lecture Examples</h1>
             <h2>PHP, Bootstrap, Web API's, Javascrips libraries</h2>
             <p>The following are basic code examples which are used to illustrate the lecture notes</p>
             </div><!-- .hero-unit -->
            
                <div class="row">

                     <div class="span4">
                     <h2 class="fixedHeight">Basic Bootstrap Page</h2>
                     <p class="fixedHeight">A basic bootstrap page, no customisation</p>
                     </br>
                     <p>
                        <a class="btn btn-success" href="jigs/example_0_code_basicpage.php">See Code</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="jigs/example_0_basicpage.php">See Page</a>
                     </p>
                     </div><!-- .span4 -->
               
                     <div class="span4">
                     <h2 class="fixedHeight">Bootstrap Boxes and Bands</h2>
                     <p class="fixedHeight">Using a band of colour or a box. Shown with twitter buttons and embedded timelines</p>
                     </br>
                     <p>
                        <a class="btn btn-success" href="jigs/example_1_code_bandsAndboxes.php">See Code</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="jigs/example_1_bandsAndboxes.php">See Page</a>
                     </p>
                     </div><!-- .span4 -->

               
                     <div class="span4">
                     <h2 class="fixedHeight">Stick to bottom footer</h2>
                     <p class="fixedHeight">put the footer at the end of the page</p>
                     </br>
                     <p>
                        <a class="btn btn-success" href="#">See Code</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="jigs/example_2_basicpageBottomFooter.php">See Page</a>
                     </p>
                     </div><!-- .span4 -->

                </div><!-- .row -->
                </br>

                <!-- ============ new examples row ============== -->
                <div class="row">

                     <div class="span4">
                     <h2 class="fixedHeight">PHP info Check</h2>
                     <p class="fixedHeight">Check PHPs configuration settings</p>
                     </br>
                     <p>
                        <a class="btn btn-primary" href="jigs/phpinfo.php">Check</a>
                     </p>
                     </div><!-- .span4 -->
               
                     <div class="span4">
                     <h2 class="fixedHeight">x</h2>
                     <p class="fixedHeight">xxx</p>
                     </br>
                     <p>
                        <a class="btn btn-success" href="#">See Code</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="#">See Page</a>
                     </p>
                     </div><!-- .span4 -->

                     <div class="span4">
                     <h2 class="fixedHeight">x</h2>
                     <p class="fixedHeight">xxx</p>
                     </br>
                     <p>
                        <a class="btn btn-success" href="#">See Code</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="#">See Page</a>
                     </p>
                     </div><!-- .span4 -->

                </div><!-- .row -->
                <br/>
                <!-- ============ new examples row ============== -->
                <div class="row">

                     <div class="span4">
                     <h2 class="fixedHeight">x</h2>
                     <p class="fixedHeight">xxx</p>
                     </br>
                     <p>
                        <a class="btn btn-success" href="#">See Code</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="#">See Page</a>
                     </p>
                     </div><!-- .span4 -->
               
                     <div class="span4">
                     <h2 class="fixedHeight">x</h2>
                     <p class="fixedHeight">xxx</p>
                     </br>
                     <p>
                        <a class="btn btn-success" href="#">See Code</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="#">See Page</a>
                     </p>
                     </div><!-- .span4 -->

                     <div class="span4">
                     <h2 class="fixedHeight">x</h2>
                     <p class="fixedHeight">xxx</p>
                     </br>
                     <p>
                        <a class="btn btn-success" href="#">See Code</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="#">See Page</a>
                     </p>
                     </div><!-- .span4 -->

                </div><!-- .row -->
        
            </div><!-- .container -->

            <br/>

            <!-- footer -->
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
            <script src="lib/bootstrap_v230/js/bootstrap.min.js"></script>
        </body>
    </html>

    