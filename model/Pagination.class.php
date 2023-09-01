<?php 

Class Pagination extends Database{

	public $edge, $start, $totalpages, $link = array();

	function GetPagination($field, $table){
		$query = "SELECT {$field} FROM {$table}";
		$this->ExecuteSQL($query);
		$total = $this->DataTotal();

		$this->edge = Config::DB_LIMIT_PAGE;
		$pages = ceil($total / $this->edge);
		$this->totalpages = $pages;

		$p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

		if($p > $pages){
			$p = $pages;
		}

		
		$this->start = ($p * $this->edge) - $this->edge;

		$tolerance = 4;
		$show = $p + $tolerance;
		if($show > $pages){
			$show = $pages;
		}


		for($i = ($p - $tolerance); $i <= $show; $i++):
			if($i < 1){
				$i = 1;
			}
			array_push($this->link, $i);

		endfor;




		


	}
}

 ?>