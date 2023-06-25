<?php

namespace App;

class Database 
{
    public function __construct(public static Database $connection) 
    {
    }

    public function connect(): Database
    {
        if(!isset(self::$connection)) {
            self::$connection = new Database();
        }
        return self:$connection;
    }
}