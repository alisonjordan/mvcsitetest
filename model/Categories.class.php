<?php 

Class Categories extends Database{

	private $cat_id, $cat_name, $cat_slug;

	


	function __construct(){
		parent::__construct();
	}

	function GetCategories(){
		
		$query = "SELECT * FROM {$this->prefix}categories";

		$this->ExecuteSQL($query);

		$this->GetList();
		
	}



	private function GetList(){
		$i = 1;
		while($list = $this->DataFetch()):
		$this->items[$i] = array(
			 'cat_id' => $list['cat_id'],
			 'cat_name'  => $list['cat_name'] ,  
	         'cat_slug'  => $list['cat_slug'] ,  
	         'cat_link'  => Route::page_Products(). '/' .$list['cat_id'] . '/' . $list['cat_slug']  , 
			
			'cat_link_adm'  => Route::page_ProductsADMIN(). '/' .$list['cat_id'] . '/' . $list['cat_slug']  , 
					);



		$i++;
		endwhile;
	}



	function Insert($cat_name){
        
        // trato os campos
        $this->setCat_name($cat_name);
        $this->setCat_slug($cat_name);


        
        // monto a SQL
        $query = " INSERT INTO {$this->prefix}categories (cat_name, cat_slug )";
        $query.= " VALUES (:cat_name, :cat_slug )";
        // passo so parametros
        $params = array(':cat_name' => $this->getCat_name(),
                        ':cat_slug' => $this->getCat_slug(),
                      
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        
    }




    function Update($cat_id,$cat_name){
        
        // trato os campos
        $this->setCat_name($cat_name);
        $this->setCat_slug($cat_name);
        
        // monto a SQL
        $query = " UPDATE {$this->prefix}categories ";
        $query.= " SET cat_name = :cat_name, cat_slug = :cat_slug ";
        $query.= " WHERE cat_id = :cat_id ";
        // passo so parametros
        $params = array(':cat_name' => $this->getCat_name(),
                        ':cat_slug' => $this->getCat_slug(),
                        ':cat_id'   => (int)$cat_id,
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        
    }



     function Delete($cat_id){
        
          // verifico se  tenho itens antes de apagar a categoria
          $pro = new Products();
          $pro->GetProductsCatID($cat_id);
          
        if( $pro->DataTotal() > 0):
              echo '<div class="alert alert-danger" > Esta categoria tem: ';
              echo $pro->DataTotal();
              echo ' produtos. Não pode ser apagada, para apagar precisa primeiro apagar os produtos dela </div>';
     
              // se nao tiver produtos nela  eu apago 
         else:
            
                 // monto a SQL
        $query = " DELETE FROM {$this->prefix}categories";
        $query.= " WHERE cat_id = :id";
        
        // passo os parametros
        $params = array(':id' => (int)$cat_id);
        // executo a SQL
    
         if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        endif;
     
        
    }
    



    //GET
     function getCat_name() {
        return $this->cat_name;
    }

    function getCat_slug() {
        return $this->cat_slug;
    }



    //SET
    function setCat_name($cat_name) {
       
        $this->cat_name = filter_var($cat_name, FILTER_SANITIZE_STRING);
    }

    function setCat_slug($cat_slug) {
       
        
        $this->cat_slug = System::GetSlug($cat_slug);
    }



}

 ?>