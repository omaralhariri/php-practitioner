<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statment = $this->pdo->prepare("SELECT * FROM {$table}");
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_CLASS);
    }
}