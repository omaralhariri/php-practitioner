<?php

require "core/bootstrap.php";

App::get("database")->insert("users", [
    "username" => $_POST["username"],
    "password" => $_POST["password"]
]);

header("Location: /");