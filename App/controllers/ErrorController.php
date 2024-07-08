<?php

namespace App\Controllers;

class ErrorController
{
    public static function notFound( $message = "Page dosen't exist!")
    {
        http_response_code(404);
        view('error', [
            'status' => 404,
            'message' => $message
        ]);
    }
}