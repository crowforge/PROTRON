<?php
/*
 * Ref:
 * https://gist.github.com/martinbean/1855032
 * http://ryanfait.com/sticky-footer/
 */
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>PROTRON</title>
            <meta name="description" content="Lecture examples">
            <meta name="author" content="Conor O&amp;Reilly">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- do not touch this one -->
            <link href="../lib/bootstrap_v230/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="../lib/bootstrap_v230/css/bootstrap-responsive.min.css" rel="stylesheet"/>
            
            <!-- Your styles go in here-->
            <link href="../css/examples/example_2_bottomFooter.css" rel="stylesheet"/>

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
                  <a class="brand" href="../index.php">PROTON</a>
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
            <div class="wrapper">

              <div class="container">

              <!-- testcard button -->
              <p align="right"><a href="../testcard.php" class="btn btn-success btn-large">
              <i class="icon-white icon-arrow-left"></i> back to testcard</a></p>

              <div class="hero-unit">
              <h1>Twitter&rsquo;s Bootstrap with Ryan Fait&rsquo;s Sticky Footer</h1>
              </div>
              
              </div><!-- .container -->

              <div class="push"><!--//--></div>

            </div><!-- .wrapper -->
            

            <footer>
            <div class="container">
            <p>Put together in less than five minutes by <a href="http://www.martinbean.co.uk/" rel="author">Martin Bean</a>. Uses <a href="http://twitter.github.com/bootstrap/" rel="external">Twitter Bootstrap</a> and <a href="http://ryanfait.com/sticky-footer/" rel="external">Ryan Fait&rsquo;s Sticky Footer</a>.</p>
            </div>
            </footer>

            <!-- have at the bottom of the page to speed up loading -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <!-- the link below to the CDN links to the latest version of jquery each time BUT
            this is a bad idea 
                1) the caching only works if you specify a version number
                2) deploy with only what you have tested with
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            -->
            <script src="../lib/bootstrap_v230/js/bootstrap.min.js"></script>
        </body>
    </html>

    