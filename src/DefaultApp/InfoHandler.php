<?php
namespace App\DefaultApp;

/**
 * InfoHandler
 */
class InfoHandler
{
    
    /**
     * Info
     *
     * @param  string $value
     * @return void
     */
    public static function Info(string $value) {

        $_SESSION['infomsg'] = $value;

    }
    
    /**
     * Info_print
     *
     * @return void
     */
    public static function Info_print() {

        if(isset($_SESSION['infomsg'])){
            echo $_SESSION['infomsg'];
            unset($_SESSION['infomsg']);
          }

    }

}