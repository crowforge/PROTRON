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
            <div class="container">

            <!-- testcard button -->
            <p align="right"><a href="../testcard.php" class="btn btn-success btn-large">
              <i class="icon-white icon-arrow-left"></i> back to testcard</a></p>
         
             <div id="myStyle" class="hero-unit">
             <h1>Example 0</h1>
            </br>
             <p>This is the most basic page, it has responsive capabilities</p>
             <p>This page would be used as a template for other pages but it would 
                typically be cut up into three php files header, body and footer. 
                Then php includes functionality would be used to pull it all togeather
                again.</p>
             <p>This page, as it is, could be renamed .html instead of .php and used
                for creating a static website or webpage as it does not require php. 
                But you would also need the js, css and img folders as it references files
                in those folders. You would also need to change the file pathname accordingly!</p>
             </div><!-- .hero-unit -->
            
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
            <script src="../lib/bootstrap_v230/js/bootstrap.min.js"></script>
        </body>
    </html>

    