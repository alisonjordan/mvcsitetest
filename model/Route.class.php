<?php
Class Route{

    public static $urls;
    private static $folder_controller = 'controller';
    private static $folder_view = 'view';

    static function get_SiteHome(){
        return Config::SITE_URL . '/' . Config::SITE_FOLDER;
    }

    static function get_SiteRoot(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_FOLDER;
    }

    static function get_SiteTheme(){
        return self::get_SiteHome() . '/' . self::$folder_view;
    }

    static function page_Clients(){
        return self::get_SiteHome() . '/clients' . self::$folder_view;
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