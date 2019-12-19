<?php


include_once('../config/constant.php');

class Connection
{
    private $host = HOST;
    private $user = UNAME;
    private $dname = DBNAME;
    private $pass = PASS;

    public function dbConnect()
    {
        return new PDO("mysql:host=localhost; dbname=admin", "root", "");
    }
}

?>