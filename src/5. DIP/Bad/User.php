<?php 

namespace Example\SolidPrinciple\DIP\Bad;

class User
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DatabaseConnection();
    }

    public function getUserData()
    {
        
    }
}