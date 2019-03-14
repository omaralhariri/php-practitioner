<?php    
    
$query = require "core/bootstrap.php";

require Router::load("routes.php")

    ->direct(Request::uri(), Request::method());
    // Chaining, ommitting ; to indicate the next line is part of the
    // previous one.