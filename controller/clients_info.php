<?php


$smarty = new Template();
$clients = new Client();
$clients->GetClientsID(Route::$urls[1]);

//values for template

$smarty->assign('CLI',$clients->GetItems());


$smarty->assign('NAME','Alison Jordan');
$smarty->assign('GET_IMAGE',Route::get_ImageURL());

$smarty->display('clients_info.tpl');


?>