<?php
/**
* Helpers for the template file.
*/

/**
* Add static entries in the template file.
*/
$gr->data['header'] = <<<EOD
<nav class="navmenu">
  <a id="index-" href="http://www.student.bth.se/~toha12/phpmvc/kmom01/index.php">Om mig</a>
  <a id="redovisning-" href="http://www.student.bth.se/~toha12/phpmvc/kmom01/redovisning.php">Redovisning</a>
  <a id="source-" href="source.php">Källkod</a><br>
</nav>
EOD;

$gr->data['footer'] = <<<EOD
Verktyg:
  <a href="http://validator.w3.org/check/referer">HTML5</a>
  <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
  <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS3</a>
  <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
  <a href="http://validator.w3.org/i18n-checker/check?uri=http://www.student.bth.se/~toha12/phpmvc/kmom02/">i18n</a>
  <a href="http://validator.w3.org/checklink?uri=http://www.student.bth.se/~toha12/phpmvc/kmom02/">Links</a>
EOD;

$gr->data['footerkmom'] = <<<EOD
Kmom: 
  <a href="http://www.student.bth.se/~toha12/phpmvc/kmom01/index.php">01</a>
  <a href="http://www.student.bth.se/~toha12/phpmvc/kmom02/gringo">02</a>
EOD;
