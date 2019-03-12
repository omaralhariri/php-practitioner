<?php

class Connection {

    // Static keyword makes it possible to call the method globally
    // with out initiating the instance (just using $obj::method())
    // insted of: $conn = new Connection(); $conn->make();
    // Just use: Connection::make() but be careful too
    public static function make() 
    {
        try {
            return new PDO("mysql:host=localhost;dbname=mytodo;", "root", "0000");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
