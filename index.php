<?php
require './lib/autoload.php';

$smarty = new Template();

//values for template

$smarty->assign('NAME','Alison Jordan');

$smarty->assign('GET_THEME',Route::get_SiteTheme());


$smarty->display('index.tpl');

?>