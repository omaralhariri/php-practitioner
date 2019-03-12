<?php

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statment = $this->pdo->prepare("SELECT * FROM {$table}");
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_CLASS);
        // You either put them into a variable inside the method
        // the define a variable $intoClass for the method 
        // and give its value when initiate it ("todos", "Task")
        // OR you could be responsible for how you map it 
    }
}