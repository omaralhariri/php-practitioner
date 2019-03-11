<?php
 

class Task {
    
    public $description;
    
    public $completed = false;

    public function __construct($description) 
    {
        // Automatically tigered on instantiation
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function description()
    {
        return $this->description;
    }
}

$tasks = [
    new Task("Go to Wadi Shallaleh"),
    new Task("Continue php-learning"),
    new Task("Watch a movie")
];

$tasks[0]->complete();
$tasks[2]->complete();

require "index.view.php";




