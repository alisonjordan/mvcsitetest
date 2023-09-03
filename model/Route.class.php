<?php
Class Route{

    public static $urls;
    private static $folder_controller = 'controller';
    private static $folder_view = 'view';
    private static $folder_ADMIN = 'admin';

    static function get_SiteHome(){
        return Config::SITE_URL . '/' . Config::SITE_FOLDER;
    }

    static function get_SiteRoot(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_FOLDER;
    }

    static function get_SiteTheme(){
        return self::get_SiteHome() . '/' . self::$folder_view . '/theme';
    }

    static function page_CartUpdate(){
		return  self::get_SiteHome(). '/cart_update';
	}

    static function page_Products(){
        return self::get_SiteHome() . '/products';
    }

    static function page_ProductsInfo(){
        return self::get_SiteHome() . '/products_info';
    }

    static function page_About(){
        return self::get_SiteHome() . '/about';
    }

    static function get_SiteADMIN(){
		return self::get_SiteHome() .'/' .self::$folder_ADMIN;

	}


    static function page_ProductsADMIN(){
		return self::get_SiteADMIN() .'/adm_produtos';

	}

    

    static function get_ImageFolder(){
		return 'media/images/';
	}

	static function get_ImageURL(){
		return self::get_SiteHome() .'/' .self::get_ImageFolder();

	}

    static function ImageLink($img, $width, $height){
		$image = self::get_ImageURL() . $img . '" width="'.$width.'"'.' height="'.$height.'"';

		return $image;

	}

    static function Redirect($time, $page){
		$url = '<meta http-equiv="refresh" content="'.$time.'; url='. $page .'">';
		echo $url;
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