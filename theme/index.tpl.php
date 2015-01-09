<!doctype html>
<html lang='<?=$lang?>' class='no-js'> <!-- Modernizr will replace the class 'no-js' with a list of features supported by the browser -->
<head>
<meta charset='utf-8'/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?> 
<?php foreach($stylesheets as $val): ?>
<link rel='stylesheet' type='text/css' href='<?=$val?>'/>
<?php endforeach; ?>
<script src='<?=$modernizr?>'></script>

</head>
<body>
  <div id='wrapper'>
    <div id='sitelogo'><?=$sitelogo?></div>
    <div id='header'><?=$header?></div>
    <div id='menu'><?=$menu?></div> 	
    <div id='siteslogan'><?=$siteslogan?></div>
    <div id='main'><?=$main?></div>
    <div id='footer'><?=$footer?></div>
  </div>
<script src='<?=$val?>'></script>
<?php endforeach; endif; ?>
<?php endif; ?>
</body>
</html>

