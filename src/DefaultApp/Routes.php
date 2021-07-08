<?php
namespace App\DefaultApp;

/**
 * Routes
 */
class Routes
{

    
    /**
     * Execute
     *
     * @return void
     */
    public static function Execute() {


    /*/////////////////////////////
    * Default page
    *//////////////////////////////
    Router::DefaultRoute('example');


    /*/////////////////////////////
    * Routes
    *//////////////////////////////

    Router::Route('example', 'ExampleController@index');
    // Router::Route('test', 'test@test');

    /*/////////////////////////////
    * Unknown page redirection
    *//////////////////////////////
    Router::UnknownRoute('DefaultAppController@NotFound');
    
    }
    
}