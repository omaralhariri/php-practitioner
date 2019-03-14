<?php

require "core/bootstrap.php";

$username = $_POST["username"];
$password = $_POST["password"];

$app["database"]->insert(
                        "users",
                        "username, password",
                        "$username, $password"
                        );