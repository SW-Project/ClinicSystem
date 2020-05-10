<?php
require_once("/Applications/XAMPP/xamppfiles/htdocs/SW/App/Database/Db.php");

abstract class Model
{
    protected $db;
    protected $conn;


    public function connect()
    {
        if(null === $this->conn )
        {

            $this->db = new Db();

        }
        return $this->db;
    }
}
?>
