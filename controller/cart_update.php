<?php 

if(!isset($_POST['pro_id']) or $_POST['pro_id'] < 1){
	echo '<h4 class="alert alert-danger"> Error! </h4>';
	Route::Redirect(1, Route::page_Cart());
	exit();
}

$id = (int)$_POST['pro_id'];

$cart = new Cart();

try {
	$cart->CartADD($id);
} catch (Exception $e) {
	echo '<h4 class="alert alert-danger"> Error! </h4>';
}


Route::Redirect(1, Route::page_Cart());

 ?>