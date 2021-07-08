<?php
namespace App\DefaultApp;
use Exception;

/**
 * Router
 */
class Router
{
    
    /**
     * Route
     *
     * @param  mixed $route
     * @param  mixed $ctrlmth
     * @return void
     */
    public static function Route(string $route, string $ctrlmth) {

        $page = RequestHandler::GET('page', null);

        if($page == $route) {

            $controller_name = ucfirst(strtok($ctrlmth, '@'));
            $method = ucfirst(substr(strrchr($ctrlmth, '@'), 1));

            if(file_exists("src/Controllers/$controller_name.php") && method_exists("\App\Controllers\\$controller_name", $method)){
                $controller_name = "\App\Controllers\\" . $controller_name;
                $controller = new $controller_name;
                $controller->$method();
                exit;
            }
            else{
                ErrorHandler::Error("Le contrôleur <span style=\"color:green;\">$controller_name</span> ou la méthode <span style=\"color:red;\">$method</span> n'existe pas.");
                self::Redirect("index.php?page=unknown");
                exit;
            }
        }

    }
    
    /**
     * UnknownRoute
     *
     * @param  mixed $ctrlmth
     * @return void
     */
    public static function UnknownRoute(string $ctrlmth) {

            $controller_name = ucfirst(strtok($ctrlmth, '@'));
            $method = ucfirst(substr(strrchr($ctrlmth, '@'), 1));

            if(file_exists("src/Controllers/$controller_name.php") && method_exists("\App\Controllers\\$controller_name", $method)){
                $controller_name = "\App\Controllers\\" . $controller_name;
                $controller = new $controller_name;
                $controller->$method();
                exit;
            }
            else{
                throw new Exception($controller_name . " controller or " . $method . " method doesn't exists in your Routes file");
                exit;
            }

    }
    
    /**
     * Redirect
     *
     * @param  mixed $url
     * @return void
     */
    public static function Redirect(string $url) {

        header('Location: '.$url);
        exit();
        
    }
            
    /**
     * Redirect_meta_frefresh
     *
     * @param  mixed $url
     * @return void
     */
    public static function RedirectMetaRefresh(string $url) {
        
        header('refresh:0;url='.$url);
        exit();
        
    }
    
    /**
     * Session_redirect_empty
     *
     * @return void
     */
    public static function RedirectEmptySession() {
        if(empty($_SESSION['session'])){
            self::Redirect("index.php?ctrl=Home&mth=Home");
        }
    }
            
    /**
     * HomepageRedirect
     *
     * @param  string $homagepage
     * @return void
     */
    public static function DefaultRoute(string $homagepage) {
        
        $page = RequestHandler::GET('page', null);
        
        if($page == null){
                self::Redirect("index.php?page=" . $homagepage);
        }
        
    }

}