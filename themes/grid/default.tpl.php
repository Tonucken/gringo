<!doctype html>
<html lang='en'>
<head>
  <meta charset='utf-8'/>
  <title><?=$title?></title>
  <link rel='shortcut icon' href='<?=$favicon?>'/>
  <link rel='stylesheet' href='<?=$stylesheet?>'/>
</head>

<body>
<div id='wrap-header'>
<div id='header'>
  <div id='login-menu'><?=login_menu()?></div>
  <div id='banner'>
    <a href='<?=base_url()?>'><img class='site-logo' src='<?=$logo?>' alt='logo' width='<?=$logo_width?>' height='<?=$logo_height?>' /></a>
    <p class='site-title'><a href='<?=base_url()?>'><?=$header?></a></span>
    <p class='site-slogan'><?=$slogan?></span>
  </div> <!-- banner -->
</div> <!-- header -->
</div> <!-- wrap -->


<div id='wrap-main'>
<div id='main' role='main'>
  <?=get_messages_from_session()?>
  <?=@$main?>
  <?=render_views()?>
</div> <!-- main -->
</div> <!-- wrap -->


<div id='wrap-footer'>
<div id='footer'>
  <?=$footer?>
  <?=get_debug()?>
</div> <!-- footer -->
</div> <!-- wrap -->


<div id='wrap-footerkmom'>
<div id='footerkmom'>
  <?=$footerkmom?>
  <?=get_debug()?>
</div> <!-- footer -->
</div> <!-- wrap -->

</body>
</html>