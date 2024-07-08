<?php


namespace App\Controllers;

use Framework\Validator;
use OpenAI;

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
            return;
        }

        $apiKey = $_ENV['API_KEY'];

        $client = OpenAI::client($apiKey);

        $result = $client->chat()->create([
        'model' => 'gpt-4o',
        'messages' => [
            [
                'role' => 'user',
                'content' => [
                    [
                        'type' => 'text', 
                        'text' => "Stwórz tekst alternatywny do tego obrazka. Teskt powinien mieć maksymalnie 150 znaków."
                    ],
                    [
                        'type' => 'image_url', 
                        'image_url' =>  [
                            'url' => "https://www.gcs.gda.pl/wp-content/uploads/2024/02/parging_gcs.webp",
                        ],
                    ],
            ],
            
        ],
        ],
        'max_tokens' => 4000,
        
        ]);



        echo($result->choices[0]->message->content);
    }
}