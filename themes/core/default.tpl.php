<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>
<link rel="stylesheet" href="<?=$stylesheet?>">
</head>

<body class="roundedtop roundedbottom">
  <header class="roundedtop">
  <?=$header?>
  </header>

  <div id="main" role="main">
  <?=$main?>
  <?=get_debug()?>
  </div>

  <footer>
  <?=$footer?>
  </footer>
  
  <footer class="roundedbottom kmom">
  <?=$footerkmom?>
  </footer>
  
</body>
</html>