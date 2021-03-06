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
                'over_eighteen' => 'I\'m over 18 years old.',
                'accept_policty_start' => 'Please accept our ',
                'accept_policty_stop' => 'regulations.',
                'privacy' => 'Privacy',
            ],

            'notification' => [

                'success' => [

                    'title' => 'Thank you!',
                    'description' => 'We\'ve successfully received your registration!',
                ],

                'error' => [

                    'title' => 'Ohhps!',
                    'description' => 'Something went wrong. Please try again later!',
                ],
            ],

        ],

    ],

];
