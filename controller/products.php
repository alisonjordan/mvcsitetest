
<?php 

$smarty = new Template();

$products = new Products();

if(isset(Route::$page[1]) && !isset($_POST['txt_buscar'])){
	$products->GetProductsCatID(Route::$page[1]);
}elseif(isset($_POST['txt_buscar'])){
	
				$name = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
				$products->GetProductsName($nome);

}elseif(isset($_POST['txt_buscar']) && isset(Route::$page[1])){
	
				$name = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
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

