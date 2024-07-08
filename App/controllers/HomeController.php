<?php

namespace App\Controllers;
class HomeController
{
    public function index()
    {
        view('home');
    }

    public function about()
    {
        view('about');
    }
}