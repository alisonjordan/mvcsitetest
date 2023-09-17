<?php

Class System {
   
    /**
     * 
     * @return String:
     */
    static function CurrentDateBR(){
        
        return date('d/m/Y') ;
    }
    /**
     * 
     * @return String: 
     */
    static function CurrentDateUS(){
        
        return date('m/d/Y') ;
    }
    /**
     * 
     * @return string: 
     */
    static function CurrentHour(){
        
        return date('H:i:s') ;
    }

        /**
     * 
     * @param type $valor
     * @return float
     */
    static function CurrencyBR($value){
       
        
        return number_format($value,2,",",".");  
    }
     /**
     * 
     * @param string 
     * @return string
     */
    public static function Fdata($date){
	  
        
	  $date_correct= explode("-",$date);
	  $date = $date_correct[2]."/". $date_correct[1] ."/".$date_correct[0];  
	  return $date;   
    }
    
                   
   /**
    * 
    * @param type int:
    * @return string: 
    */
    static function PasswordGen(){
		
    $size = 1;
	$string ="";
			
	for ($i = 0; $i < $size; $i++) {
				
		 
				   $string .= chr(rand(109, 122));
                                   $string .= rand(40, 99);
                                   $string .= chr(rand(109, 122));
                                   $string .= rand(20, 89);
                                   $string .= chr(rand(109, 122));
                                   $string .= chr(rand(109, 122));
                                   		  
			}
			$string = str_replace('o', 'z', $string);
			$string = str_replace('0', 'b', $string);
			
			return $string;
			
	} 
        
        
        
        
    /**
     * 
     * @param type string: CPF 
     * @return boolean: 
     */    
    static function ValidateCPF($cpf = false) {    
      
	$d1 = 0;
	$d2 = 0;
            
    
            $cpf = preg_replace("/[^0-9]/", "", $cpf);
            
            
            $ignore_list = array(
              '00000000000', '01234567890','11111111111','22222222222','33333333333',
              '44444444444', '55555555555','66666666666', '77777777777','88888888888',
              '99999999999'
            );
            
            
            if(strlen($cpf) != 11 || in_array($cpf, $ignore_list)){
                return false;
            } else {
             
                
              for($i = 0; $i < 9; $i++){
               
                
                $d1 += $cpf[$i] * (10 - $i);
              }
              
              
              $r1 = $d1 % 11;
             
              
              $d1 = ($r1 > 1) ? (11 - $r1) : 0;
              
              
              for($i = 0; $i < 9; $i++) {
                
                
                $d2 += $cpf[$i] * (11 - $i);
              }
              
              
              $r2 = ($d2 + ($d1 * 2)) % 11;
              
              
              $d2 = ($r2 > 1) ? (11 - $r2) : 0;
              
              
              return (substr($cpf, -2) == $d1 . $d2) ? true : false;
  }
      
} 

     /**
     * 
     * @return string
     */
     static  function GetIp(){

            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {

                    $ip = $_SERVER['REMOTE_ADDR'];
                }

                return $ip;
     }
     
     static function PageBack(){
         
         echo '<script> function goBack() {
                    window.history.back();
                    } </script>';
         echo '<button onclick="goBack()" class="btn btn-default">'
         . '<i class="glyphicon glyphicon-circle-arrow-left" ></i> Back </button> ';
     }
    
  
     
     /**
     * @return string:
     */
    static function GetSlug($string) {
  
        if (is_string($string)) {
            $string = strtolower(trim(utf8_decode($string)));

            $before = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr';
            $after = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
            $string = strtr($string, utf8_decode($before), $after);

            $replace = array(
                '/[^a-z0-9.-]/' => '-',
                '/-+/' => '-',
                '/\-{2,}/' => ''
            );

            $string = preg_replace(array_keys($replace), array_values($replace), $string);
        }
        return trim(substr($string, 0, 55));
    }
    
    /**
     * 
     * @param string 
     * @return string 
     */
    static function Cypher($value){
        
        return hash('SHA512', $value);
        
    }
     
     
    
}