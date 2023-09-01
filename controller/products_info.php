
<?php 

$smarty = new Template();

$products = new Products();
$products->GetProductsID(Route::$page[1]);

$image = new ProductsImages();
$image->GetImagesPRO(Route::$page[1]);

$smarty->assign('PRO', $products->GetItems());
$smarty->assign('THEME', Route::get_SiteTheme());
$smarty->assign('IMAGES', $image->GetItems());
$smarty->assign('PAGE_BUY', Route::page_CartUpdate());



$smarty->display('products_info.tpl');



 ?>

