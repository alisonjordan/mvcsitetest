<?php
Class Client extends Database{

    function __construct(){
        parent::__construct();
}

    function GetClients(){
        $query = "SELECT * FROM {$this->prefix}clients";
        //$query .= "ORDER BY cli_name DESC";

        $this->ExecuteSQL($query);

        $this->GetFetch();

    }

    function GetClientsID($id){
		
		$query = "SELECT * FROM {$this->prefix}clients";

		$query .= " WHERE cli_id = :id";

		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params);

		$this->GetFetch();
		
	}

    private function GetFetch(){

        $i = 1;
        while($fetch = $this->DataFetch()):
        $this->items[$i] = array (
            'cli_id' => $fetch['cli_id'],
            'cli_name'  => $fetch['cli_name'] ,  
            'cli_cpf'  => $fetch['cli_cpf'] ,  
            'cli_address'  => $fetch['cli_address'],
            'cli_email'  => $fetch['cli_email'],
            'cli_picture'  => $fetch['cli_picture'],
            'cli_slug'  => $fetch['cli_slug'],
            'cli_description'  => $fetch['cli_description']



        );
        $i++;
    endwhile;
    }
}

?>