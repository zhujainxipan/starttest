<?php
/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/15
 * Time: 15:49
 */
define("ROOT", str_replace("\\", "/", dirname(__FILE__)) . '/');
require ROOT . 'libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(ROOT . 'templates/')
    ->addTemplateDir(ROOT . 'templates2/')
    ->setCompileDir(ROOT . 'templates_c/')
    ->setPluginsDir(ROOT . 'plugins/')
    ->setCacheDir(ROOT . 'cache/')
    ->setConfigDir(ROOT . 'configs');

$smarty->caching = false;
$smarty->cache_lifetime = 60 * 60 * 24;
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';
