<?php    
    
$query = require "bootstrap.php";
// require "Task.php";
// Don't need a specific class, just the built-in will do it

$tasks = $query->selectAll("todos");

// In case you chose mapping
// $tasks = array_map(function($task) {
//     $t = new Task();
//     $t->description = $task['description'];

// }, $tasks);


require "index.view.php";