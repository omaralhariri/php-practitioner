<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get("database")->selectAll("users");
        require view("users", compact("users"));
    }

    public function store()
    {
        App::get("database")->insert("users", [
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        ]);

        return redirect("users");
    }
}