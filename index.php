<?php

use App\Core\{Router, Request};

require "vendor/autoload.php";
    
$query = require "core/bootstrap.php";

Router::load("app/routes.php")

    ->direct(Request::uri(), Request::method());
    // Chaining, ommitting ; to indicate the next line is part of the
    // previous one.