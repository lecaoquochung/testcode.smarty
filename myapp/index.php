<?php
 /**
 * Example Application

 * @package Example-application
 */

require '../libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');

$smarty->assign('name', 'Hung');
$smarty->display('index.tpl');

?>
