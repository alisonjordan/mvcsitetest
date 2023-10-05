<?php

if(isset($_SESSION['PRO'])) {

/*
	if(!isset($_POST['freight_radio'])){
		Route::Redirect(1, Route::page_Cart().'#datafreight');
		exit ('<h4 class="alert alert-danger"> You must select the freight! </h4>');
	}

*/
	$smarty = new Template();

	$cart = new Cart();



	$smarty->assign('PRO', $carrinho->GetCarrinho());

	$_SESSION['ORD']['freight'] = $_POST['freight_radio'];
	$_SESSION['ORD']['total_with_freight'] = ($_POST['freight_radio']+ $cart->GetTotal());


	$smarty->assign('TOTAL', $cart->GetTotal());
	$smarty->assign('FREIGHT', $_SESSION['ORD']['freight']);
	$smarty->assign('TOTAL_FREIGHT', $_SESSION['ORD']['total_with_freight']);
	$smarty->assign('GET_PAGE_CART', Route::page_Cart());
	$smarty->assign('PAGE_CART_UPDATE', Route::page_CartUpdate());
	$smarty->assign('PAGE_FINISH', Rotas::page_OrderFinish());



    

	$smarty->display('order_confirm.tpl');


}else{
	echo '<p><div class="container"><h4 class="alert alert-danger"> <i class="fa-solid fa-triangle-exclamation"></i> There is no product inside the cart. </h4></div>';
	Route::Redirect(3, Route::page_Products());
}

 ?>