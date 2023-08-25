<?php
Class Route{

    public static $urls;

    static function get_SiteHome(){
        return Config::SITE_URL . '/' . Config::SITE_FOLDER;
    }

    static function get_SiteRoot(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_FOLDER;
    }

    static function get_Page(){
        if(isset($_GET['page'])){

            $page = $_GET['page'];

            self::$urls = explode('/', $page); 

            $page = 'controller/' . self::$urls[0] . '.php';

        if(file_exists($page)){
            include $page;
        }else{
            include 'error.php';
        }

        }
        
    }
}



?>