<?php
require './lib/autoload.php';

$smarty = new Template();

Route::get_Page();

//values for template


$smarty->assign('NAME','Alison Jordan');


$smarty->display('index.tpl');

?>