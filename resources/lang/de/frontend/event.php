<?php

return [
    'title' => 'Event',

    'meta' => [
            'title' => 'The first BaselHack',
            'description' => 'The first Hackathon in the Region of Basel with 11 running prototypes',
            'keywords' => 'BaselHack, Basel, Hackathon, connect, talents, Open Innovation, Open Source, bring all your ideas',
        ],


    'signup' => [


        'form' => [

            'button' => [
                'submit' => 'Sign-Up!'
            ],

            'input' => [

                'type'  => 'Type',

                'select' => [

                    'type' => 'Please select a type!',
                    'participant' => 'Participant',
                    'sponsor' => 'Sponsor',
                    'visitor' => 'Visitor'
                ],

                'firstname' => 'Fristname',
                'lastname' => 'Lastname',
                'company' => 'Company',
                'email' => 'E-Mail',
                'over_eighteen' => 'Are you ver 18 years old?',
                'accept_policty' => 'Please accept our privacy regulations.',
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


        ]



    ],

];
