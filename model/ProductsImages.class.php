<?php 

Class ProductsImages extends Database{
	function GetImagesPRO($pro){

		$query = "SELECT * FROM {$this->prefix}images WHERE img_pro_id = :pro";

		$params = array(':pro'=>(int)$pro);

		$this->ExecuteSQL($query, $params);

		$this->GetList();

	}

	private function GetList(){
		$i = 1;
		while($list = $this->DataFetch()):
		$this->items[$i] = array(
			 'img_id' => $list['img_id'],
			 'img_name' => Route::ImageLink($list['img_name'], 150, 150) ,
			 'img_name_l' => Route::ImageLink($list['img_name'], 400, 400) ,   
	         'img_pro_id'  => $list['img_pro_id'] ,  
	         'img_link' => Route::ImageLink($list['img_name'], 500, 500) ,
	         'img_file' => $list['img_name'],
	         
			);

		$i++;
		endwhile;
	}


	public function Insert($img,$product){
        
        $query = "INSERT INTO {$this->prefix}images (img_name,img_pro_id)";
        $query.= " VALUES (:img_name,:img_pro_id) ";
        
        $params = array(':img_name'=>$img, ':img_pro_id'=> (int)$product);
        
        $this->ExecuteSQL($query, $params);
        
        
    }


    public function Delete($img_name){
        
        
        $query = " DELETE FROM {$this->prefix}images ";
        $query .= " WHERE img_name = :img_name ";
        
        $params = array(':img_name'=>$img_name);
        
        $this->ExecuteSQL($query, $params);
        
    }



}

 ?>