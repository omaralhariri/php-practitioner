<?php

function checkAge($age) {
    if ($age >= 18) {
        echo "You may enter";
    } else {
        echo "Sorry, You're not allowed here";
    }
}

function dd($value) {
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}