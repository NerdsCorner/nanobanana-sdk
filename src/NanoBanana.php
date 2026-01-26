<?php

namespace NerdsCorner\NanoBanana;

use Psr\Http\Message\ResponseInterface;

class NanoBanana
{
    protected string $apiKey;

    protected \GuzzleHttp\Client $httpClient;

    public function __construct()
    {
        $this->httpClient = new \GuzzleHttp\Client(['base_uri' => 'https://generativelanguage.googleapis.com']);

    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function generateImage(string $prompt, string $model = 'gemini-2.5-flash-image'): ResponseInterface
    {
        // Generate image using NanoBanana API
        return $this->httpClient->post('/v1beta/models/'.$model.':generateContent', [
            'headers' => [
                'x-goog-api-key' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'contents' => [
                    [
                        'parts' => ['text' => $prompt],
                    ],
                ],
            ],
        ]);
    }
}
