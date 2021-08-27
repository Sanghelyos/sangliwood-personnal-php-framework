<?php

namespace App\DefaultApp;

/**
 * LocalesHandler
 */
class LocalesHandler
{
    
    /**
     * Set_locales
     *
     * @return void
     */
    public static function Set_locales () {

        $locales = Config::Get_config();
        setlocale(LC_ALL, $locales['LOCALES']);
        
    }

}