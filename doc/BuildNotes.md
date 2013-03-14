Build Notes



=============================================================================
## BUILD 2
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
## BUILD 1
=============================================================================
Basic structure