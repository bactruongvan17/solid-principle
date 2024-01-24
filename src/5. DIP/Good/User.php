<?php 

namespace Example\SolidPrinciple\DIP\Good;

class User 
{
    private $dbConnection;

    public function __construct(DatabaseConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getUserData()
    {
        
    }
}