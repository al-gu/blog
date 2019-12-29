<?php
require_once 'config/init.conf.php';
require_once 'vendor/smarty/Smarty.class.php';

// charge la bibliothèque Smarty


$smarty = new Smarty();

$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
//$smarty->config_dir = '/web/www.example.com/smarty/livredor/configs/';
//$smarty->cache_dir = '/web/www.example.com/smarty/livredor/cache/';

$smarty->assign('name','alex');

$smarty->display('smartytest.tpl');
?>