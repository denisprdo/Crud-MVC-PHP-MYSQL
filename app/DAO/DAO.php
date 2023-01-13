<?php

namespace App\DAO;

use \PDO;

abstract class DAO 
{
    protected $con;
    
    public function __construct()
    {
        $dsn = "mysql:host=" . $_ENV['db']['host'] . ":3306;dbname=" . $_ENV['db']['dbname'];
        $this->con = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass']);
    }
}