<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {

        require view("index");
    }

    public function about()
    {
        $company = "Laracast";
        require view("about", compact("company"));
    }

    public function contact()
    {
        require view("contact");
    }
}