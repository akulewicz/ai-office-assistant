<?php

declare(strict_types=1);

namespace App\Controllers;
use Framework\Validator;
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