<?php 
Class Products extends Database{

	 private $pro_name, $pro_category, $pro_active, $pro_model, $pro_reference, 
            $pro_price, $pro_stock, $pro_weight , $pro_height, $pro_width, $pro_size ,
            $pro_image, $pro_description, $pro_slug ;



	function __construct(){
		parent::__construct();
	}


	function GetProducts(){
		//query para buscar os produtos de uma categoria especifica.
		$query = "SELECT * FROM {$this->prefix}products p INNER JOIN {$this->prefix}categories c ON p.pro_category = c.cat_id";

	
		$query .= " ORDER BY pro_id DESC";

		$query .= $this->PaginationLinks("pro_id", $this->prefix."products");

		
		$this->ExecuteSQL($query);

		$this->GetList();
		
	}



	function GetProductsID($id){
		//query para buscar os produtos de uma categoria especifica.
		$query = "SELECT * FROM {$this->prefix}products p INNER JOIN {$this->prefix}categories c ON p.pro_category = c.cat_id";

		$query .= " AND pro_id = :id";

		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params);

		$this->GetList();
		
	}


	function GetProductsCatID($id){
		

		$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

		$query = "SELECT * FROM {$this->prefix}products p INNER JOIN {$this->prefix}categories c ON p.pro_category = c.cat_id";

		$query .= " AND pro_category = :id";

		$query .= $this->PaginationLinks("pro_id", $this->prefix."products WHERE pro_category=".(int)$id);



		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params);

		$this->GetList();
		
	}







    function GetProductsName($name){
        
          
        $query = "SELECT * FROM {$this->prefix}products p INNER JOIN {$this->prefix}categories c ON p.pro_category = c.cat_id";       
        $query .= " WHERE pro_name LIKE '%$name%'";
        $query .= $this->PaginationLinks("pro_id", $this->prefix."products WHERE pro_name LIKE '%$name%'");


        
        
        $params = array(':name'=>$name);
                             
        $this->ExecuteSQL($query,$params);
         
        $this->GetList();
    }



    



	private function GetList(){
		$i = 1;
		while($list = $this->DataFetch()):
		$this->items[$i] = array(
			 'pro_id' => $list['pro_id'],
			 'pro_name'  => $list['pro_name'] ,  
	         'pro_description'  => $list['pro_description'] ,  
	         'pro_weight'  => $list['pro_weight'] ,  
	         'pro_price'   => Sistema::MoedaBR($list['pro_price'])  ,  
	         'pro_price_us'   => $list['pro_price']  ,  
	         'pro_height' => $list['pro_height'] ,  
	         'pro_width' => $list['pro_width'] ,  
	         'pro_size' => $list['pro_size'] ,  
	         'pro_image'     => Route::ImageLink($list['pro_image'], 180, 180) ,  
	         'pro_image_l'     => Route::ImageLink($list['pro_image'], 300, 300) , 
	         'pro_image_s'     => Route::ImageLink($list['pro_image'], 70, 70) , 
	         'pro_slug' => $list['pro_slug'], 
	         'pro_reference' => $list['pro_reference'], 
	         'cat_name' => $list['cat_name'] , 
	         'cat_id'   => $list['cat_id'] ,
             'pro_model'   => $list['pro_model'] ,  
             'pro_stock'   => $list['pro_stock'] ,  
             'pro_active'   => $list['pro_active'] , 
             'pro_image_file'   => Route::get_SiteRoot() .'/'. Route::get_ImageFolder().$list['pro_img'], 
             'pro_image_current'     => $list['pro_image'] ,   
 
			);

		$i++;
		endwhile;
	}





	function Prepare($pro_name, $pro_category, $pro_active, $pro_model, $pro_reference, 
            $pro_price, $pro_stock, $pro_weight , $pro_height, $pro_width, $pro_size ,
            $pro_image, $pro_description, $pro_slug=null){
        
                $this->setPro_name($pro_name);
                $this->setPro_category($pro_category);
                $this->setPro_active($pro_active);
                $this->setPro_model($pro_model);
                $this->setPro_reference($pro_reference);
                $this->setPro_price($pro_price);
                $this->setPro_stock($pro_stock);
                $this->setPro_weight($pro_weight);
                $this->setPro_height($pro_height);
                $this->setPro_width($pro_width);
                $this->setPro_size($pro_size);
                $this->setPro_image($pro_image);
                $this->setPro_description($pro_description);
                $this->setPro_slug($pro_name);
            }



            function Insert(){
          
        $query = "INSERT INTO {$this->prefix}products (pro_name, pro_category, pro_active, pro_model, pro_reference," ;
        $query.= " pro_price, pro_stock, pro_weight , pro_height, pro_width, pro_size ,pro_image, pro_description, pro_slug)";
        $query.= " VALUES ";
        $query.= " ( :pro_name, :pro_category, :pro_active, :pro_model, :pro_reference, :pro_price, :pro_stock, :pro_weight ,";
        $query.= " :pro_height, :pro_width, :pro_size ,:pro_image, :pro_description, :pro_slug)";
        
        $params = array(
        ':pro_name'=> $this->getPro_name(),   
        ':pro_category'=> $this->getPro_category(),   
        ':pro_active'=> $this->getPro_active(),   
        ':pro_model'=> $this->getPro_model(),   
        ':pro_reference'=> $this->getPro_reference(),   
        ':pro_price'=> $this->getPro_price(),   
        ':pro_stock'=> $this->getPro_stock(),   
        ':pro_weight'=> $this->getPro_weight(),   
        ':pro_height'=> $this->getPro_height() , 
        ':pro_width'=> $this->getPro_width(),
        ':pro_size'=> $this->getPro_size(),   
        ':pro_image'=> $this->getPro_image(),   
        ':pro_description'=> $this->getPro_description(),   
        ':pro_slug'=> $this->getPro_slug(),   
                     
        );


          if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }




         function Update($id){
          
        $query = " UPDATE {$this->prefix}products SET pro_name=:pro_name, pro_category=:pro_category," ;
        $query.= " pro_active=:pro_active, pro_model=:pro_model, pro_reference=:pro_reference,";
        $query.= " pro_price=:pro_price, pro_stock=:pro_stock, pro_weight=:pro_weight , ";
        $query.= " pro_height=:pro_height, pro_width=:pro_width,";
        $query.= " pro_size=:pro_size ,pro_image=:pro_image, pro_description=:pro_description, pro_slug=:pro_slug";
       $query.= " WHERE pro_id = :pro_id";
       
        
        $params = array(
        ':pro_name'=> $this->getPro_name(),   
        ':pro_category'=> $this->getPro_category(),   
        ':pro_active'=> $this->getPro_active(),   
        ':pro_model'=> $this->getPro_model(),   
        ':pro_reference'=> $this->getPro_reference(),   
        ':pro_price'=> $this->getPro_price(),   
        ':pro_stock'=> $this->getPro_stock(),   
        ':pro_weight'=> $this->getPro_weight(),   
        ':pro_height'=> $this->getPro_height() , 
        ':pro_width'=> $this->getPro_width(),
        ':pro_size'=> $this->getPro_size(),   
        ':pro_image'=> $this->getPro_image(),   
        ':pro_description'=> $this->getPro_description(),   
        ':pro_slug'=> $this->getPro_slug(),   
        ':pro_id'=> (int)$id,   
                     
        );
        
           
        
           // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }



    function Delete($id){
        $query = "DELETE FROM {$this->prefix}products WHERE pro_id = :id";
        $params = array(
            ':id' => (int)$id
            );

         if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
    }






	//GETTERS

	function getPro_name() {
        return $this->pro_name;
    }

    function getPro_category() {
        return $this->pro_category;
    }

    function getPro_active() {
        return $this->pro_active;
    }

    function getPro_model() {
        return $this->pro_model;
    }

    function getPro_reference() {
        return $this->pro_reference;
    }

    function getPro_price() {
        return $this->pro_price;
    }
    function getPro_stock() {
        return $this->pro_stock;
    }

    function getPro_weight() {
        return $this->pro_weight;
    }

    function getPro_height() {
        return $this->pro_height;
    }

    function getPro_width() {
        return $this->pro_width;
    }

    function getPro_size() {
        return $this->pro_size;
    }

    function getPro_image() {
        return $this->pro_image;
    }

    function getPro_description() {
        return $this->pro_description;
    }

    function getPro_slug() {
        return $this->pro_slug;
    }





    //SETTERS

    function setPro_name($pro_name) {
        $this->pro_name = $pro_name;
    }

    function setPro_category($pro_category) {
        $this->pro_category = $pro_category;
    }

    function setPro_active($pro_active) {
        $this->pro_active = $pro_active;
    }

    function setPro_model($pro_model) {
        $this->pro_model = $pro_model;
    }

    function setPro_reference($pro_reference) {
        $this->pro_reference = $pro_reference;
    }

    function setPro_price($pro_price) {
        //1.335,99 => 1.33599
        
        // procura a virgula e troca por ponto
      $pro_price = str_replace('.', '', $pro_price); 
      $pro_price = str_replace(',', '.', $pro_price); 
       
        $this->pro_price = $pro_price ;
       // echo $this->pro_valor;
        
    }
    
    function setPro_stock($pro_stock) {
        $this->pro_stock = $pro_stock;
    }

    function setPro_weight($pro_weight) {
      
       ///  1,600  => 1.600
        $this->pro_weight = str_replace(',', '.', $pro_weight);
   
    }

    function setPro_height($pro_height) {
       
        $this->pro_height = $pro_height;
    }

    function setPro_width($pro_width) {
        $this->pro_width = $pro_width;
    }

    function setPro_size($pro_size) {
        $this->pro_size = $pro_size;
    }

    function setPro_image($pro_image) {
        $this->pro_image = $pro_image;
    }

    function setPro_description($pro_description) {
        $this->pro_description = $pro_description;
    }

    function setPro_slug($pro_slug) {
       
        
        $this->pro_slug = Sistema::GetSlug($pro_slug);
    }





}

?>
