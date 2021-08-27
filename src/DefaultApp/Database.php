<?php
namespace App\DefaultApp;
use PDO;
use Exception;
  
  /**
   * Database
   */
  class Database
  {

    private static $_instance;
    
    /**
     * PDOConnect
     *
     * @return PDO
     */
    public static function Connect (): PDO {

      if (!self::$_instance) {
        $db_config = parse_ini_file('db.ini');
        if ($db_config['enabled'] != true) {
          throw new Exception('You are trying to connect to the databse but database connection is disabled in db.ini file!');
        }
        self::$_instance = new PDO('mysql:host='.$db_config['host'].';dbname='.$db_config['db'].';charset=utf8', $db_config['username'], $db_config['password'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }

      return self::$_instance;
    }

  }