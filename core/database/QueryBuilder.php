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

    public function insert($table, $columns, $values)
    {
        // Convert the string $values to an array
        $valuesArray = explode(",", $values);

        // Count the number of elements in the array $valuesArray and 
        // assign it to the var $valuesCount(integer) to be used in for loop
        $valuesCount = count($valuesArray);

        // Create an empty string that will contain a number of "?"
        // equal the number of values given
        $valuesNum = "";

        // Create a for loop to insert "?" into $valuesNum for
        // $valuesCount times
        for ($i = 0; $i < $valuesCount; $i++) {
            if ($i < ($valuesCount - 1)) {
                $valuesNum .= "?, ";
            } else {
                // strip "," from the last value "?"
                $valuesNum .= "?";
            }
        }
        $statment = $this->pdo->prepare(
                                        "INSERT INTO {$table} ({$columns})
                                        VALUES ({$valuesNum})
                                        ");

        // execute(array), using explode to turn the string $values
        // to an array for executation
        $statment->execute(explode(",", $values));
    }
}