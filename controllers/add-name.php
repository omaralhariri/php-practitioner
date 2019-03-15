<?php

require "core/bootstrap.php";

$app["database"]->insert("users", [
    "username" => $_POST["username"],
    "password" => $_POST["password"]
]);

header("Location: /");