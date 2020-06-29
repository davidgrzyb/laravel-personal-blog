<?php

return [
    'taglines' => [
        'header' => env('HEADER_TAGLINE', ''),
        'footer' => env('FOOTER_TAGLINE', ''),
    ],

    'cta' => [
        'navbar' => '<span class="italic">Hey!</span> I make TailwindCSS templates. <a href="https://rokk.it/github" target="_blank" class="font-bold text-gray-700 hover:underline">Check them out here</a> ⚡️',
        'sidebar' => [
            'enabled' => env('SIDEBAR_CTA_ENABLED', false),
            'title' => 'Tailwind Templates',
            'description' => 'I build Tailwind templates, open-source and free to use 😌',
            'image' => '',
            'url' => '#',
        ],
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

    'about' => [
        'name' => 'David Grzyb',
        'subtitle' => 'Web Developer in Ontario, Canada',
        'description' => 'My name is David, and I\'m a Web Developer in Hamilton, Ontario. My experience is mostly based around PHP & Laravel, however I\'ve been becoming increasingly interested in frontend frameworks and technologies. My latest obsessions are Alpine.js and Livewire 😁',
        'meta' => [
            'title' => 'David Grzyb — Web Development Personal Blog',
            'description' => 'David Grzyb is a web developer with experience using PHP and JavaScript in Hamilton, Ontario.',
        ],
    ]
];
