
<?php 

$smarty = new Template();

$products = new Products();

if(isset(Route::$urls[1]) && !isset($_POST['txt_search'])){
	$products->GetProductsCatID(Route::$urls[1]);
}elseif(isset($_POST['txt_search'])){
	
				$name = filter_var($_POST['txt_search'], FILTER_SANITIZE_STRING);
				$products->GetProductsName($name);

}elseif(isset($_POST['txt_search']) && isset(Route::$urls[1])){
	
				$name = filter_var($_POST['txt_search'], FILTER_SANITIZE_STRING);
				$products->GetProductsName($name);
	
}else{

	$products->GetProducts();
}




$smarty->assign('PRO', $products->GetItems());
$smarty->assign('PRO_INFO', Route::page_ProductsInfo());
$smarty->assign('PRO_TOTAL', $products->DataTotal());
$smarty->assign('PAGES', $products->ShowPagination());
$smarty->assign('PRODUCTS', Route::page_Products());


$smarty->display('products.tpl');


 ?>

