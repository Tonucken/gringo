<?php
/**
* Helpers for the template file.
*/

/**
* Add static entries in the template file.
*/
$ly->data['header'] = <<<EOD
<nav class="navmenu">
  <a id="index-" href="http://www.student.bth.se/~toha12/phpmvc/kmom01/index.php">Om mig</a>
  <a id="blog-" href="http://www.student.bth.se/~toha12/phpmvc/kmom05/gringo/blog">Blog</a>
  <a id="guestbook-" href="http://www.student.bth.se/~toha12/phpmvc/kmom03/gringo/guestbook">Gästbok</a>
  <a id="redovisning-" href="http://www.student.bth.se/~toha12/phpmvc/kmom01/redovisning.php">Redovisning</a>
  <a id="source-" href="source.php">Källkod</a><br>
</nav>
EOD;

$ly->data['footer'] = <<<EOD
Verktyg:
  <a href="http://validator.w3.org/check/referer">HTML5</a>
  <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS3</a>
  <a href="http://validator.w3.org/i18n-checker/check?uri=http://www.student.bth.se/~toha12/phpmvc/kmom03/gringo">i18n</a>
  <a href="http://validator.w3.org/checklink?uri=http://www.student.bth.se/~toha12/phpmvc/kmom03/gringo">Links</a>
EOD;

$ly->data['footerkmom'] = <<<EOD
Kmom: 
  <a href="http://www.student.bth.se/~toha12/phpmvc/kmom01/index.php">01</a>
  <a href="http://www.student.bth.se/~toha12/phpmvc/kmom02/gringo">02</a>
  <a href="http://www.student.bth.se/~toha12/phpmvc/kmom03/gringo">03</a>
  <a href="http://www.student.bth.se/~toha12/phpmvc/kmom04/gringo">04</a>
  <a href="http://www.student.bth.se/~toha12/phpmvc/kmom05/gringo">05</a>
EOD;
