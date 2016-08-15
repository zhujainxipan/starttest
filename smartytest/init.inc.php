<?php
/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/15
 * Time: 15:49
 */
require "libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";
$smarty->config_dir = "config";
$smarty->cache_dir = "cache";
$smarty->caching = true;
$smarty->left_delimiter = "{*";
$smarty->right_delimiter = "*}";
