<?php

return [
    
    'face' => [
        /*
        |-------------------------------------------------------------
        | API Key
        |-------------------------------------------------------------
        |
        | The Azure Service API Key
        |
        */
        
        'api_key' => env('AZURE_COGNITIVE_API_KEY_FACE', ''),
        
        /*
        |-------------------------------------------------------------
        | API Endpoint
        |-------------------------------------------------------------
        |
        | The Cognitive Service API endpoint from Azure Console
        |
        */
        
        'endpoint' => env('AZURE_COGNITIVE_ENDPOINT_FACE', 'https://westus.api.cognitive.microsoft.com/'),
    ],
    
    'speech' => [
        /*
        |-------------------------------------------------------------
        | API Key
        |-------------------------------------------------------------
        |
        | The Azure Service API Key
        |
        */
        
        'api_key' => env('AZURE_COGNITIVE_API_KEY_SPEECH', ''),
        
        /*
        |-------------------------------------------------------------
        | API Endpoint
        |-------------------------------------------------------------
        |
        | The Cognitive Service API endpoint from Azure Console
        |
        */
        
        'endpoint' => env('AZURE_COGNITIVE_REGION_SPEECH', 'us-east-2'),
    ],
];
