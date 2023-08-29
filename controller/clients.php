<?php


$smarty = new Template();
$clients = new Client();
$clients->GetClients();

//values for template

$smarty->assign('CLI',$clients->GetItems());
$smarty->assign('NAME','Alison Jordan');


$smarty->display('clients.tpl');


?>