<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *
 *  License: MIT
 */

// Always define page name
define('PAGE', 'portal');
?>
<!DOCTYPE html>
<html lang="<?php echo (defined('HTML_LANG') ? HTML_LANG : 'en'); ?>">
  <head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
	<?php 
	$title = $language->get('general', 'home');
	require(ROOT_PATH . '/core/templates/header.php'); 
	?>
  
  </head>
  <body>
    <?php 
	require(ROOT_PATH . '/core/templates/navbar.php'); 
	require(ROOT_PATH . '/core/templates/footer.php'); 
	
	$smarty->display(ROOT_PATH . '/custom/templates/' . TEMPLATE . '/portal.tpl');

    require(ROOT_PATH . '/core/templates/scripts.php'); ?>
	
  </body>
</html>