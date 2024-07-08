<?php


namespace App\Controllers;

use OpenAI;

class AltGeneratorController
{
    public function index()
    {
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