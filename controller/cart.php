<?php



if(isset($_SESSION['PRO'])) {



	$smarty = new Template();

	$cart = new Cart();

	$smarty->assign('PRO', $cart->GetCart());
	$smarty->assign('TOTAL', $cart->GetTotal());
	$smarty->assign('PAGE_PRODUCTS', Route::page_Products());
	$smarty->assign('PAGE_CART_UPDATE', Route::page_CartUpdate());
	$smarty->assign('PAGE_CONFIRM', Route::page_OrderConfirm());
	$smarty->assign('WEIGHT', number_format($cart->GetWeight(),3,'.',''));


    

	$smarty->display('cart.tpl');


}else{
	echo '<p><div class="container"><h4 class="alert alert-danger"> <i class="fa-solid fa-triangle-exclamation"></i> There is no product inside the cart. </h4></div>';
	Route::Redirect(2, Route::page_Products());
}

 ?>