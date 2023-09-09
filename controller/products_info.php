
<?php 

$smarty = new Template();


$products = new Products();
$products->GetProductsID(Route::$urls[1]);

$image = new ProductsImages();
$image->GetImagesPRO(Route::$urls[1]);

/*
$ID = Route::$urls[1];
foreach ($products->GetItems() as $pro) {
	$_SESSION['PRO'][$ID]['ID'] = $pro['pro_id'];
	$_SESSION['PRO'][$ID]['NAME'] = $pro['pro_name'];
    $_SESSION['PRO'][$ID]['PRICE'] = $pro['pro_price'];
    $_SESSION['PRO'][$ID]['PRICE_US'] = $pro['pro_price_us'];
    $_SESSION['PRO'][$ID]['WEIGHT'] = $pro['pro_weight'];
    $_SESSION['PRO'][$ID]['QTT'] = 1;
    $_SESSION['PRO'][$ID]['IMAGE'] = $pro['pro_image'];
    $_SESSION['PRO'][$ID]['LINK'] = 'sssslink';
    $ID++;
}

*/





$smarty->assign('PRO', $products->GetItems());
$smarty->assign('THEME', Route::get_SiteTheme());
$smarty->assign('IMAGES', $image->GetItems());
$smarty->assign('PAGE_BUY', Route::page_CartUpdate());



$smarty->display('products_info.tpl');



 ?>

