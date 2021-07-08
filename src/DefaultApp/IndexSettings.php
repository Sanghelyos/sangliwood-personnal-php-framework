<?php
namespace App\DefaultApp;
use App\DefaultApp\Config;

/**
 * IndexSettings
 */
class IndexSettings
{
    
    /**
     * Execute
     *
     * @return void
     */
    public static function Execute() {

        $config = Config::Get_config();

        setlocale (LC_TIME, $config['LOCALES']);
        define('DIR_NAME', $config['DIR_NAME']);

        if($config['ERROR_DISPLAY'] == true){
            ini_set('display_startup_errors', true);
            error_reporting(E_ALL);
            ini_set('display_errors', true);
        }
        else{
            error_reporting(0);
        }

    }

}