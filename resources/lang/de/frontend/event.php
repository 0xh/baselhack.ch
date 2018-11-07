<?php

return [
    'title' => 'Event',

    'signup' => [

        'form' => [

            'button' => [
                'submit' => 'Sign-Up!',
            ],

            'input' => [

                'type' => 'Type',

                'select' => [

                    'type' => 'Please select a type!',
                    'participant' => 'Participant',
                    'sponsor' => 'Sponsor',
                    'visitor' => 'Visitor',
                ],

                'firstname' => 'Firstname',
                'lastname' => 'Lastname',
                'company' => 'Company',
                'email' => 'E-Mail',
                'over_eighteen' => 'And confirm that you\'re over 18 years old.',
                'accept_policty_start' => 'Please accept our ',
                'accept_policty_stop' => 'regulations',
                'privacy' => 'Privacy',
            ],

            'notification' => [

                'confirmed' => [

                    'title' => 'Thank you!',
                    'description' => 'We\'ve successfully confirmed your participation!',
                ],

                'restored' => [

                    'title' => 'Thank you!',
                    'description' => 'We\'ve successfully restored your participation!',
                ],

                'success' => [

                    'title' => 'Thank you!',
                    'description' => 'We\'ve successfully received your registration!',
                ],

                'registered' => [

                    'title' => 'Sorry =(',
                    'description' => 'You\'re already registered, we guess once is enough!',

                ],

                'fully_booked' => [

                    'title' => 'Sorry =(',
                    'description' => 'At the moment we\'re fully booked!',
                ],

                'error' => [

                    'title' => 'Ohhps!',
                    'description' => 'Something went wrong. Please try again later!',
                ],
            ],

        ],

    ],

];
