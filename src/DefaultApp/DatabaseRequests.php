<?php
namespace App\DefaultApp;
use Exception;

/**
 * DatabaseRequests
 */
class DatabaseRequests
{

    private $_db;

    function __construct()
    {
        $this->_db = Database::Connect();
    }
    
    
    /**
     * SelectAll
     *
     * @param  mixed $sql
     * @return mixed
     */
    public function SelectAll($sql) {

        try {
            $req = $this->_db->prepare($sql);
            $req->execute();
            $row = $req->rowCount();
            if($row > 0){
                $data = $req->fetchAll();
                $req->closeCursor();
                return $data;
            }
        }
        catch (Exception $e) {
            return $e;
        }
    }
    
    
    /**
     * Select
     *
     * @param  mixed $sql
     * @return mixed
     */
    public function Select($sql) {

        try {
            $req = $this->_db->prepare($sql);
            $req->execute();
            $row = $req->rowCount();
            if ($row > 0) {
                $data = $req->fetch();
                $req->closeCursor();
                return $data;
            }
            else {
                return null;
            }
        }
        catch (Exception $e) {
            return $e;
        }
    }
    
    
    /**
     * Delete
     *
     * @param  mixed $sql
     * @return mixed
     */
    public function Delete($sql) {

        try {
            $req = $this->_db->prepare($sql);
            $req->execute();
            $req->closeCursor();
        }
        catch (Exception $e) {
            return $e;
        }

    }
    
        
    /**
     * Insert
     *
     * @param  mixed $sql
     * @param  array $params
     * @return mixed
     */
    public function Insert($sql, array $params) {

        try {
            $req = $this->_db->prepare($sql);

            $req->execute($params);

            $req->closeCursor();

            return 'success';
        }
        catch (Exception $e) {
            return $e;
        }

    }

}