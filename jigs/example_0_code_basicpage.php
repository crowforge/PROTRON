<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date: 
 *
 * *************************************** */

$examplenamePHP = "example_0_basicpage.php";
$examplenameCSS = "example_0_basic.css";
$examplename = "example_0";

// notes ar _notes.md, css and js are just .css and .js
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
            <link href="../css/examples/example_0_basic.css" rel="stylesheet"/>

            <!-- syntax highlighter 
                 http://softwaremaniacs.org/soft/highlight/en/download/
                 http://softwaremaniacs.org/media/soft/highlight/test.html
            -->
            <link rel="stylesheet" href="http://yandex.st/highlightjs/7.3/styles/github.min.css">

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
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="../index.php">PROTON</a>
                  <div class="nav-collapse">
                    <ul class="nav">
                      <li ><a href="#notes">Notes</a></li>
                      <li><a href="#html">HTML</a></li>
                      <li><a href="#css">CSS</a></li>
                      <li><a href="#js">JavaScript</a></li>
                      <li><a href="#ui">User Interface</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div>
              </div>
            </div>
            
            <!-- main page content -->
            <div class="container">

            <!-- testcard button -->
            <p align="right"><a href="../testcard.php" class="btn btn-primary btn-large">
              <i class="icon-white icon-arrow-left"></i> back to testcard</a></p>
         
            </div><!-- .container -->
            
            <a name="ui"></a>
            <div class="container">
            <div class="row">
            <h2>User Interface</h2>
            <!-- a bootstrap best practice iframe -->
            <!-- heredoc used, DEF (the start and stop identifier in this case)
                 at the end it must be on its own line with no indent
                 variables in heredocs must be inside {} -->
            <?php 
            $iframeDefinition = <<<DEF
            <iframe class="well span12"
                    style="height: 1000px; background-color: #F0F0F0 ;"
                    src="../jigs/{$examplenamePHP}" >
            </iframe>
DEF;
            echo $iframeDefinition;
            ?>
            </div><!-- .row -->
            </div><!-- .container -->

            <a name="notes"></a>
            <div class="container">
            <div class="row">
            <h2>Notes</h2>
            <div class="span12">
            <pre>
            <code class="markdown">
            <?php 
              $filename = "../doc/example/".$examplename."_notes.md";
              if (file_exists($filename))
              { 
                echo htmlspecialchars(
                  file_get_contents($filename));
              } else { echo "none"; }
            ?>
            </code>
            </pre>
            <?php echo "<p><i>$filename</i></p>"?>
            </div><!-- .span12 -->
            </div><!-- .row -->
            </div><!-- .container -->
            
            <br/>
            <a name="html"></a>
            <div class="container">
            <div class="row">
            <h2>HTML</h2>
            <div class="span12">
            <pre>
            <code class="html">
            <?php 
              $filename = "../jigs/".$examplenamePHP;
              if (file_exists($filename))
              { 
                echo htmlspecialchars(
                  file_get_contents($filename));
              } else { echo "none"; }
            ?>
            </code>
            </pre>
            <?php echo "<p><i>$filename</i></p>"?>
            </div><!-- .span12 -->
            </div><!-- .row -->
            </div><!-- .container -->
            
            <br/>
            <a name="css"></a>
            <div class="container">
            <div class="row">
            <h2>CSS</h2>
            <div class="span12">
            <pre>
            <code class="css">
            <?php 
              $filename = "../css/examples/".$examplenameCSS;
              if (file_exists($filename))
              { 
                echo htmlspecialchars(
                  file_get_contents($filename));
              } else { echo "none"; }
            ?>
            </code>
            </pre>
            <?php echo "<p><i>$filename</i></p>"?>
            </div><!-- .span12 -->
            </div><!-- .row -->
            </div><!-- .container -->
            
            <br/>
            <a name="js"></a>
            <div class="container">
            <div class="row">
            <h2>JavaScript</h2>
            <div class="span12">
            <pre>
            <code class="javascript">
            <?php 
              $filename = "../js/example/".$examplename.".js";
              if (file_exists($filename))
              { 
                echo htmlspecialchars(
                  file_get_contents($filename));
              } else { echo "none"; }
            ?>
            </code>
            </pre>
            <?php echo "<p><i>$filename</i></p>"?>
            </div><!-- .span12 -->
            </div><!-- .row -->
            </div><!-- .container -->

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

            <!-- syntax highlighter 
                 http://softwaremaniacs.org/soft/highlight/en/download/
            -->
            <script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
            <script>hljs.initHighlightingOnLoad();</script>
        </body>
    </html>

    