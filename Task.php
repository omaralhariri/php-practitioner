<?php

class Task {

    public $description;

    public $completed;

    // public function foobar()
    // {
    //     return "foobar";
    // }

    public function isComplete()
    {
        return $this->completed;
    }
}