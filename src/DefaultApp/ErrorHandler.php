<?php
namespace App\DefaultApp;

/**
 * ErrorHandler
 */
class ErrorHandler
{
    
    /**
     * Error
     *
     * @param  string $value
     * @return void
     */
    public static function Error(string $value) {

        $_SESSION['error'] = $value;

    }
    
    /**
     * Error_print
     *
     * @return void
     */
    public static function Error_print() {

        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
          }

    }

}