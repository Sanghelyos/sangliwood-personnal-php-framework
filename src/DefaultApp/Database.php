<?php
namespace App\DefaultApp;
use PDO;
  
  /**
   * Database
   */
  class Database
  {

    private static $_instance = NULL;
    
    /**
     * PDOConnect
     *
     * @return PDO
     */
    public static function Connect(): PDO {

      if (self::$_instance === NULL)
      {
        $bdd_config = parse_ini_file('db.ini');
        self::$_instance = new PDO('mysql:host='.$bdd_config['host'].';dbname='.$bdd_config['db'].';charset=utf8', $bdd_config['username'], $bdd_config['password'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }

      return self::$_instance;
    }

  }