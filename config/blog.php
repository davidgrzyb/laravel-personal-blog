<?php

return [
    'taglines' => [
        'header' => 'Laravel Developer in Ontario, Canada 🇨🇦',
        'footer' => 'I\'m a Backend Developer currently living in Ontario, Canada.',
    ],

    'meta' => [
        'title' => 'David Grzyb — Web Development Personal Blog',
        'description' => 'David Grzyb is a web developer with experience using PHP and JavaScript in Hamilton, Ontario.',
    ],

    'cdn' => [
        'url' => env('CDN_URL'), 
        'enabled' => env('CDN_ENABLED', false), 
    ],
];
