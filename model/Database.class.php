<?php 

Class Database extends Config{
    private $host, $user, $password, $name;
    protected $obj, $items=array(), $prefix;

    function __construct(){
        $this->host = self::DB_HOST;
        $this->user = self::DB_USER;
        $this->password = self::DB_PASSWORD;
        $this->name = self::DB_NAME;
        $this->prefix = self::DB_PREFIX;
        
        try {
            if ($this->Connect() == NULL) {
                $this->Connect();
            }
            
        } catch (Exception $e) {
            exit($e->getMessage(). '<h2> Database error connection!');
        }

    }

    private function Connect(){
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );
        $link = new PDO("mysql:host={$this->host}; dbname={$this->name}",
        $this->user, $this->password, $options);
        return $link;

    }

    function ExecuteSQL($query, array $params = []){

    $this->obj = $this->Connect()->prepare($query);
    if(count($params) > 0){
        foreach($params as $key =>$value){
            $this->obj->bindvalue($key, $value);
        }
    }

    return $this->obj->execute();
}

    function DataFetch(){

    return $this->obj->fetch(PDO::FETCH_ASSOC);
}

    function DataTotal(){
    return $this->obj->rowCount();
}

    function GetItems(){

    return $this->items;
}


function PaginationLinks($field, $table){
    $page = new Pagination();
    $page->GetPagination($field, $table);
    $this->pagination_links = $page->link;

    $this->totalpages = $page->totalpages;
    $this->edge = $page->edge;
    $this->start = $page->start;

    $start = $page->start;
    $edge = $page->edge;

    if($this->totalpages > 0){
        return " limit {$start}, {$edge}";
    }else{
        return " ";
    }
    
}

protected function Pagination($pages=array()){
    $pag = '<ul class="pagination justify-content-center">';
    $pag .= '<li class="page-item"><a class="page-link" href="?p=1"> First </a></li>';

    foreach($pages as $p):
        $pag .= '<li class="page-item"><a class="page-link" href="?p='.$p.'">'.$p.'</a></li>';
        endforeach;

    $pag .= '<li class="page-item" ><a class="page-link" href="?p='. $this->totalpages .'"> Last </a></li>';

    $pag .= '</ul>';

    if($this->totalpages > 1){
    return $pag;
    }
}

function ShowPagination(){
    return $this->Pagination($this->pagination_links);
}

}
 ?>

