<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 "/>

<title><?php print $head_title; ?></title>

<meta name="copyright" content="Copyright <?php print date('Y'); ?> Change me in html.tpl.php. All rights reserved." />
<meta name="description" content="Change me in html.tpl.php" />
<meta name="author" content="">

<link rel="image_src" href="<?php print base_path() . path_to_theme(); ?>/img/apple-touch-icon-iphone4.png" />
<link rel="apple-touch-icon" href="<?php print base_path() . path_to_theme(); ?>/img/apple-touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php print base_path() . path_to_theme(); ?>/img/apple-touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php print base_path() . path_to_theme(); ?>/img/apple-touch-icon-iphone4.png" />

<?php print $head; ?>
<?php print $styles; ?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if (lt IE 9)&(!IEMobile)]>
  <link rel="stylesheet" media="screen" href="<?php print base_path() . path_to_theme(); ?>/css/ieLT9.css"/>
<![endif]-->

<!--[if IEMobile 7]>
  <link rel="stylesheet" media="screen" href="<?php print base_path() . path_to_theme(); ?>/css/wp7.css"/>
<![endif]-->

<!--[if lt IE 7]>
  <script defer type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/pngfix.js"></script>
<![endif]-->

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<?php
  print $page_top;
  print $page;
  print $scripts;
  print $page_bottom;
?>
</body>
</html>
