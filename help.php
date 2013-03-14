<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date: 
 *
 * *************************************** */

/*
 * Create a constant to be checked by include files
 * this ensures the include files cannot be called on their own
 */

define("MY_INC_CODE", 1);

/*
 * Set up a constant to your main application path
 */

define("APPLICATION_PATH", "app");
define("TEMPLATE_PATH", APPLICATION_PATH . "/view");
define("LIBRARY_PATH", "lib");

/*
 * Pull in the header component of the HTML page
 * This header is used for all pages that do not
 * require a login e.g. publically accessible pages
 * Contains <HTML><HEADER></HEADER><BODY> and menu ..
 */

include (TEMPLATE_PATH . "/public/header_helppage.html");

/*
 * Pull in the configuration files
 * As these files are inside php tags their data
 * is not written within the presented HTML page
 * this ensure that tokens, passwords, usernames etc
 * are secure used 
 */

include (APPLICATION_PATH . "/inc/config.inc.php");
//include (APPLICATION_PATH . "/inc/db.inc.php");
//include (APPLICATION_PATH . "/inc/functions.inc.php");

/*
 * PHP Markdown is a port to PHP of the Markdown program written by John Gruber.
 * “Markdown” is two things: a plain text markup syntax, 
 * and a software tool that converts the plain text markup to HTML for publishing on the web.
 * The help documentation is written in markdown and displayed here as html
 * include_once "markdown.php";
 * $my_html = Markdown($my_text);
*/

include_once ( LIBRARY_PATH . "/PHPMarkdown_v1.0.1p/markdown.php");

?>

<!-- main page content ................................. -->

<?php
/*
 * Pull in the public version of the main
 * page of the content
 */
include (TEMPLATE_PATH . "/public/help.inc.php");
?>

<!-- main page  end .................................... -->

<?php
/*
 * Pull in the public version of the footer
 * contains JQuery pullin and <BODY/><HTML/>
 */
 include (TEMPLATE_PATH . "/public/footer_helppage.html"); 
 ?>