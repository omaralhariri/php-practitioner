<?php

$task = [
    "title" => "Learn PHP",
    "due" => date("d D Y"),
    "assigned to" => "Omar",
    "completed" => false
];

// echo "<pre>";
// die(var_dump($task));
// echo "</pre>";

require "index.view.php";