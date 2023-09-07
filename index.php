<?php
require './lib/autoload.php';

$smarty = new Template();
$categories = new Categories();
$categories->GetCategories();

//values for template

$smarty->assign('NAME','Alison Jordan');
$smarty->assign('GET_SITE_NAME',Config::SITE_NAME); 

$smarty->assign('GET_THEME',Route::get_SiteTheme());
$smarty->assign('GET_HOME',Route::get_SiteHome());
$smarty->assign('CATEGORIES', $categories->GetItems());
$smarty->assign('GET_PAGE_PRODUCTS',Route::page_Products());
$smarty->assign('GET_PAGE_ABOUT',Route::page_About());
$smarty->assign('DATA', System::CurrentDateUS());

$data = new Database();
$smarty->display('index.tpl');

?>