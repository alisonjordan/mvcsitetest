<?php 

Class Cart{
	private $total_price, $total_weight, $items = array();

	function GetCart($session=NULL){

		$i = 1; $sub = 1.00; $weight = 0;

		

		foreach ($_SESSION['PRO'] as $list) {
			$sub = ($list['PRICE_US'] * $list['QTT']);
			$this->total_price += $sub;

			$weight = $list['WEIGHT'] *  $list['QTT'];
			$this->total_weight += $weight;

			

			$this->items[$i] = array(

				'pro_id' => $list['ID'],
				'pro_name'  => $list['NAME'],
	            'pro_price' => $list['PRICE'], // 1.000,99
	            'pro_price_us' => $list['PRICE_US'],  //1000.99
	            'pro_weight'  => $list['WEIGHT'],
	            'pro_qtt'   => $list['QTT'],
	            'pro_image'   => $list['IMAGE'],
	            'pro_link'  => $list['LINK'],
	            'pro_subTotal'=> System::CurrencyBR($sub),         
	            'pro_subTotal_us'=> $sub 

				);
			$i++;

			
		}

		if(count($this->items) > 0){
			return $this->items;
		}else{
			echo '<h4 class="alert alert-danger"> <i class="fa-solid fa-triangle-exclamation"></i> There is no product in the cart! </h4>';

		}

	}


	function GetTotal(){
		return $this->total_price;
	}

	function GetWeight(){
		return $this->total_weight;
	}

	function CartADD($id){
		$products = new Products();
		$products->GetProductsID($id);
		foreach ($products->GetItems() as $pro) {
			$ID = $pro['pro_id'];
			$NAME  = $pro['pro_name'];
            $PRICE_US = $pro['pro_price_us'];
            $PRICE  = $pro['pro_price'];
            $WEIGHT  = $pro['pro_weight'];
            $QTT   = 0 + $_POST['pro_qtt'];
            $IMAGE   = $pro['pro_image'];
            $LINK  = Route::page_ProductsInfo().'/'.$ID.'/'.$pro['pro_slug'];
            $ACTION  = $_POST['action'];
		}

		switch ($ACTION) {
			case 'add':
					if(!isset($_SESSION['PRO'][$ID]['ID'])){
						$_SESSION['PRO'][$ID]['ID'] = $ID;
						$_SESSION['PRO'][$ID]['NAME']  = $NAME;
					    $_SESSION['PRO'][$ID]['PRICE'] = $PRICE;
					    $_SESSION['PRO'][$ID]['PRICE_US'] = $PRICE_US;
					    $_SESSION['PRO'][$ID]['WEIGHT']  = $WEIGHT;
					    $_SESSION['PRO'][$ID]['QTT']   = $QTT;
					    $_SESSION['PRO'][$ID]['IMAGE']   = $IMAGE;
					    $_SESSION['PRO'][$ID]['LINK']  = $LINK;  
					}else{
						 $_SESSION['PRO'][$ID]['QTT']   += $QTT;
					}

					echo '<h4 class="alert alert-success"> <i class="fa-solid fa-circle-exclamation"></i> Product added </h4>';

				break;

			case 'del':
				$this->CartDEL($id);
				echo '<h4 class="alert alert-success"> <i class="fa-solid fa-circle-exclamation"></i> Product removed </h4>';
				break;

			case 'clean':
				$this->CartClean();
				echo '<h4 class="alert alert-success"> <i class="fa-solid fa-circle-exclamation"></i> Products removed </h4>';
				break;
			
			
		}
	}


	private function CartDEL($id){
		unset($_SESSION['PRO'][$id]);
	}

	private function CartClean(){
		unset($_SESSION['PRO']);
	}




}

 ?>