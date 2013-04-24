<!doctype html>
<html lang='en'>
<head>
  <meta charset='utf-8'/>
  <title><?=$title?></title>
<!-- <link rel='shortcut icon' href='<?=$favicon?>'/> -->
  <link rel='stylesheet' href='<?=$stylesheet?>'/>
</head>

<body class="roundedtop roundedbottom">
  
  <header class="roundedtop">
    <?=$header?>
  </header>
  
  <div>
    <?=@$main?>
    <?=get_messages_from_session()?>
    <?=render_views()?>
    <?=get_debug()?>
  </div>
  
  <footer>
    <?=$footer?>
  </footer>
  
  <footer class="roundedbottom kmom">
    <?=$footerkmom?>
      <span id='login-menu'>
      <?=login_menu()?>
      </span>
  </footer>

</body>
</html>