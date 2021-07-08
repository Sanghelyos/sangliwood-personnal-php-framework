<?php
namespace App\DefaultApp;

/**
 * RequestHandler
 */
class RequestHandler
{
        
    /**
     * POST
     *
     * @param  string $property
     * @param  mixed $else
     * @return mixed
     */
    public static function POST(string $property, $else) {
        return !empty($_POST[$property]) ? $_POST[$property] : $else;
    }
    
    
    
    /**
     * GET
     *
     * @param  string $property
     * @param  mixed $else
     * @return mixed
     */
    public static function GET(string $property, $else) {
        return !empty($_GET[$property]) ? $_GET[$property] : $else;
    }
    
    
    /**
     * REQUEST
     *
     * @param  string $property
     * @param  mixed $else
     * @return mixed
     */
    public static function REQUEST(string $property, $else) {
        return !empty($_REQUEST[$property]) ? $_REQUEST[$property] : $else;
    }
    
    
    /**
     * FILES
     *
     * @param  string $property
     * @param  mixed $else
     * @return mixed
     */
    public static function FILES(string $property, $else) {
        return !empty($_FILES[$property]) ? $_FILES[$property] : $else;
    }
    
    
    /**
     * SET_SESSION
     *
     * @param  string $property
     * @param  mixed $value
     * @return void
     */
    public static function SET_SESSION(string $property, $value) {
        $_SESSION[$property] = $value;
    }
    
    
    /**
     * GET_SESSION
     *
     * @param  string $property
     * @return mixed
     */
    public static function GET_SESSION(string $property) {
        return $_SESSION[$property];
    }

}