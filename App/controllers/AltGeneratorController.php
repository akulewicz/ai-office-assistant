<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\Validator;
use App\Services\OpenAIService;


class AltGeneratorController
{
    public function index()
    {
        view('altgenerator/index');
    }

    public function generate()
    {
        $url = $_POST['url'];

        $errors = [];

        if (!Validator::url($url)) {
            $errors['url'] = 'Musisz podać poprawny adres URL';
        }

        if (!empty($errors)) {
            view('altgenerator/index', [
                'errors'=> $errors,
                'url' => $url
            ]);

            exit();
        }

        $openAIService = new OpenAIService();

        $response = $openAIService->getResponse([
            'prompt' => 'Stwórz tekst alternatywny dla obrazka z poniższego pliku. Opis powinien mieć maksymalnie 200 znaków',
            'url' => $url,
        ]);

        dd($response);
    }
}