Build Notes

=============================================================================
## BUILD 3 ##
=============================================================================
Adding more structure, style and examples

DONE
..............
Twitter single user OAuth implemented based on the tmhOAuth library and the 140dev.com
tutorial four versions have been implemented
a) Click on the button link to the page and a pre set message is tweeted
b) A form is displayed, clicking send calls another PHP page that sends
   the tweet and returns to the form with a status update 
c) A form is displayed similar to b) but basic AJAX is used to send the tweet
d) A form similar to b) and c) is used but JQuery AJAX is used

The architecture of the twitter pages is as follows

exampleTwitter.php
|- twitter_post.php  						a)
|- twitter_postForm.php 					b)
	calls: api/sendTweet.php
|- twitter_postFormAJAX						c)
	javascript:twitter_AJAXCall.js
	calls:api/sendTweetAJAX.php
|- twitter_postFormJQueryAJAX				d)
	javascript:twitter_JQueryAJAXCall.js
	calls:api/sendTweetAJAX.php 				same as d) as only js different

Javascript for jQuery and Bootstrap moved from footers into header in the 
following files
- header_withJS.html
- footer_NoJS.html

Utility files for testing purposes
testSubmit.php can be used when performing a POST or GET to check what is being sent
testAJAXSubmits.php can be used when calling a page via AJAX to see what is being sent

HOW-TO
..............

HOW1) would like to use a variable at the start of CSS for foreground
and background colour, plus band colours BUT variable support across
all browsers is not good. Need to look as LESS or SASS approach


BUGS
..............

B1) The testcard example bricks are not maintaining the fixed heights
and header + description text are merging

B2) when move to a mobile size viewport the menu button has started to
appear larger as there are more links, rather that maintaining its 3 bar size

B3) Adding javascript functions for AJAX not running, 
with ReferenceError: $ is not defined, $(document).ready function(){
<resolved> The jQuery and bootstrap scripts are loaded in the footer
but the AJAX javascripts are being loaded at the end of the body include
as they only apply to that page not all pages. whilst the javascript will
load quicker if at the end, these scripts are used everywhere so moved to
header_withJS.html and took out of footer creating footer_noJS.html

TECHNICAL DEBT
..............

TD3) Fonts need to rescale on the hero unit once go to a mobile viewport

TD4) This version allows only a specific user to interact with twitter via
our application. The next stage would be to allow a user to login to twitter
with their own username and password and then use the functionality. 
Essentially they could tweet as themselves rather than as crowforge.


=============================================================================
## BUILD 2 ##
=============================================================================
Adding more structure, style and examples

TODO
..............



BUGS
..............

B1) Strapdown JS library didn't work as expected, changed to using PHP Markdown
for displaying the Markdown as HTML <resolved>


TECHNICAL DEBT
..............

TD1) Now have three header.inc.php files with the menu defined three times as
the javascript we pullin for the frontpage, helppage and otherpages is different.
Need to refactor the menu definition into its own file.

TD2) The application constants are at the top of each page, there are now 6 main 
pages with these definitions. Any issues?


=============================================================================
## BUILD 1 ##
=============================================================================
Basic structure