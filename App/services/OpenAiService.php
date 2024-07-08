<?php

declare(strict_types=1);

namespace App\Services;
use OpenAI;

class OpenAIService
{
   
    private $client;

    public function __construct()
    {
        $this->client = OpenAI::client($_ENV['API_KEY']);
    }

    /**
     * Sends a request to the OpenAI API to generate a response based on the given parameters.
     *
     * @param array $params {
     *     $params = [
     *          'prompt' => (string) Optional. The text prompt to generate a response for. 
     *          'url' => (string) Optional. The URL of the image to generate an alternative text for.
     *          'max_tokens' => (int) Optional. The maximum number of tokens to generate. Default is 300.
     *  ]
     *
     * }
     *
     * @return string The response from the OpenAI API.
     */
    public function getResponse(array $params) : string
    {
        $body = [
            'model' => 'gpt-4o',
            'max_tokens' => $params['max_tokens'] ?? 300,
            'messages' => [
                [
                    'role' => 'user',
                    'content' => [
                        [
                            'type' => 'text', 
                            'text' => $params['prompt'],
                        ],
                    ],
                ],
            ],
            
        ];

        if (isset($params['url'])) {
            $body['messages'][0]['content'][] = [
                'type' => 'image_url',
                'image_url' => [
                    'url' => $params['url'],
                ],
            ];
        }

        $result = $this->client->chat()->create($body);

        return $result->choices[0]->message->content;
    }

}



