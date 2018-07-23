<?php

return [

    'analytics' => ['google' => [

        'key' => 'UA-121873164-1',
        'url' => 'https://www.googletagmanager.com/gtag/js?id=UA-121873164-1',
    ]],

    'meta' => [
        'author' => '',
        'robots' => '',
    ],

    'notifications' => [
        'signup' => ['event@baselhack.ch'],
        'contact_form' => ['sponsoring@baselhack.ch', 'event@baselhack.ch', 'info@baselhack.ch'],
    ],

    'socials' => [

        'instagram' => [
            'url' => 'https://www.instagram.com/explore/tags/baselhack/',
        ],

        'facebook' => [
            'url' => 'https://www.facebook.com/BaselHackathon',
            'icon' => '',
        ],

        'linkedin' => [
            'url' => 'https://www.linkedin.com/groups/8615464',
        ],

        'twitter' => [
            'url' => 'https://twitter.com/BaselHack',
        ],

        'youtube' => [
            'url' => 'https://www.youtube.com/channel/UCat5BvUrfV7am60pLpuy8oQ ',
        ],

        'github' => [
            'url' => 'https://github.com/BaselHack',
        ],
    ],

    'languages' => [

        'status' => true,
        'active' => ['de', 'en', 'fr'],
    ],

    'members' => [
        'status' => ['active', 'inactive', 'passive', 'terminated'],
    ],

    'sponsors' => [

        'actemium' => [
            'title' => 'Actemium',
            'image' => 'actemium.png',
            'url' => 'https://www.actemium.ch',
        ],
        'basler_versicherungen' => [
            'title' => 'Basler Versicherungen',
            'image' => 'basler_versicherungen.png',
            'url' => 'https://www.baloise.ch/',
        ],
        'bluesky_it_solutions' => [
            'title' => 'Bluesky IT-Solutions',
            'image' => 'bluesky_it_solutions.png',
            'url' => 'https://www.bluesky-it.ch',
        ],
        'kanton_bl' => [
            'title' => 'Kanton Basel-Landschaft',
            'image' => 'kanton_bl.png',

            'url' => 'https://www.baselland.ch',
        ],
        'swiss_made_software' => [
            'title' => 'Swiss Made Software',
            'image' => 'swiss_made_software.png',
            'url' => 'https://www.swissmadesoftware.org',
        ],
    ],
];
