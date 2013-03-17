## Author ##
http://ie.linkedin.com/in/conororeilly

## Overview ##

The application is being built to support a lecture course that leads the learner
through the following levels of programming and application design:

- ELECTRON, a standalone HTML web app with interaction only provided by javascript
- PROTON, a custom built, roll your own PHP web application, mixing client side
  and server side interactivity. demonstrating how you start to breakdown the
  code into subpages, use of the MVC approach and other patterns, best practice and technique 
- NEUTRON, an object oriented PHP web application
- ELEMENT1, an interactive web application based on the Zend PHP framework
- ELEMENT2, an interactive web application based on the CodeIgniter PHP framework

The various branches in GIT are significant as with each branch the code is added to and 
refractored. There are lessons to be learnt prior to each refactor, see technical debt

As the course progresses, the following core functionality is taught via the above projects.
The code is pulled down a branch at a time where each branch has functionality implemented
that is relevant to the learners current level of understanding of the tools. Each branch
has technical debt, bugs and how-to issues that need to be resolved in that branch
from a previous branch or from many previous branches back.

- HTML5, CSS2, CSS3, Javascript: roll your own basic webpage, client side only
- HTML5, CSS3, Javascript, JQuery, Javascript libraries : still client side web site \ app
- all of the above with XAMPP, PHP, AJAX, SQLite, JQuery : basic client - server interactivity
- Bootstrap, XML, JSON, GIT, JS libraries : client side web site \ app
- Bootstrap, PHP, Responsive Vs. adaptive design : basic client - server web site \ app
- Bootstrap, PHP, MySQL, AJAX, JQuery : Client - Server interactive web application
- Bootstrap, PHP, MySQL, AJAX, JQuery, other site API's Twitter, Facebook, Google, PayPal
- Bootstrap, PHP object oriented, REST and big site \ app application structure
- Bootstrap, LESS, PHP Frameworks and design patterns
- Foundations, JQuery Mobile, PhoneGap, PHP Frameworks \ libraries
- NoSQL databases, Yeoman

## Main application entry points ##

index.php
testcard.php

The test card provides access to HTML, CSS and Javascript examples
that have been written in the context of the bootstrap UI framework.
These examples can be found in the jigs folder

## PROTON Application Structure ##

Main pages are off the site root e.g.

- index.php
- exampleTwitter.php
- exampleGoogle.php
- exampleFacebook.php

Each of these pages has three include files

1. a header
2. a body
3. a footer

As these pages do not require signin the include files can be found in
the app/view/public folder. Include files are named with the .inc.php prefix.
So the main contents of these pages can be found in 

- home_twitter.inc.php
- home_google.inc.php
- home_facebook.inc.php

The pages were named home_ as the intention is to add other pages showing off
other features within each API. Though the naming convention of using the key
noun associated with the page is used with any further attributes following it
e.g. footer, footer_frontpage. This also means that pages with a similar intent
or theme are kept together in the projects directory structure

## PROTON Directory Structure ##

- app 		the site or applications core pages
- css 		site or application specific CSS
- db		data directory, could contain SQLite databases
- db.dev 	database configuration and build script files
- doc		application documentation, developers, installation and users
- icon 		site or application specific icons
- img  		site or application specific images
- jigs		example code fragments
- js   		site or application specific javascript
- lib  		deployment versions of third party libraries e.g. bootstrap
- lib.dev 	github versions of third party libraries, not for deployment
- uploads	file upload location

