<?php

# API services
return [
    'default' => 'backend',

    'backend' => [
        'url' => env('BACKEND_API_URL'),
        'prefix' => env('BACKEND_API_PREFIX'),
        'endpoints' => [
            'friends.index' => [
                'method' => 'GET',
                'url' => '/',
                'fields' => [],
                'parameters' => [],
                'query' => ['inc' => 'email', 'results' => 20]
            ],
        ]
    ],
];
