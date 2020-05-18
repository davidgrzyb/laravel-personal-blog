<?php

return [
    'taglines' => [
        'header' => env('HEADER_TAGLINE', ''),
        'footer' => env('FOOTER_TAGLINE', ''),
    ],

    'topics_enabled' => env('TOPICS_ENABLED', true),

    'meta' => [
        'title' => 'David Grzyb — Web Development Personal Blog',
        'description' => 'David Grzyb is a web developer with experience using PHP and JavaScript in Hamilton, Ontario.',
    ],

    'cdn' => [
        'url' => env('CDN_URL'), 
        'enabled' => env('CDN_ENABLED', false), 
    ],
];
