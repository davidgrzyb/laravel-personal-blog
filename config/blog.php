<?php

return [
    'taglines' => [
        'header' => 'Laravel Developer in Ontario, Canada 🇨🇦',
        'footer' => 'I\'m a Backend Developer currently living in Ontario, Canada.',
    ],

    'meta' => [
        'title' => 'David Grzyb — Software Engineer in Toronto, Canada',
        'description' => 'Software Engineer living in Toronto Canada. Love programming, Laravel, my dog and driving fast!',
    ],

    'cdn' => [
        'url' => env('CDN_URL'), 
        'enabled' => env('CDN_ENABLED', false), 
    ],
];