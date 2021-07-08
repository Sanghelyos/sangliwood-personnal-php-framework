<?php
namespace App\DefaultApp;

  
  /**
   * Config
   */
  class Config
  {

    private static $_config = NULL;
    
    
    /**
     * Get_config
     *
     * @return array
     */
    public static function Get_config() :array {

      self::$_config = parse_ini_file('config.ini');
      return self::$_config;
      
    }
    
  }