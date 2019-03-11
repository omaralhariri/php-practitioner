<?php

function connectToDb () {
    try {
        return new PDO("mysql:host=localhost;dbname=mytodo", "root", "0000");
        // echo "Connected successfully";
    } catch (PDOException $e) {
        die("Connection faild: " . $e->getMessage());
    }
    
}

function fetchAllTasks($pdo) {
    $statment = $pdo->prepare("select * from todos");
    $statment->execute();
    // $tasks = $statment->fetchAll(PDO::FETCH_OBJ);
    return $statment->fetchAll(PDO::FETCH_CLASS, "Task");

    // var_dump($tasks[0]->foobar());
}

function dd($value) {
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}