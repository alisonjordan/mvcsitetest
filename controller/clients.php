<?php


$smarty = new Template();
$clients = new Client();
$clients->GetClients();

//values for template

$smarty->assign('CLI',$clients->GetItems());
$smarty->assign('CLI_INFO',Route::page_ClientsInfo());
$smarty->assign('NAME','Alison Jordan');


$smarty->display('clients.tpl');


?>