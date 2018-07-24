<?php

return [
    'title' => 'Leave us a message!',
    'subtitle' => 'Happy to hear fromy ou, whaterver the topic you have in mind.',

    'meta' => [
        'title' => 'Contact Baselhack',
        'description' => 'Contact the Baselhack Team',
        'keywords' => 'BaselHack, Basel Region, Hackathon, Contact, Together for the future',
    ],

    'form' => [

        'input' => [

                'topic' => 'Topic',

                'select' => [

                    'topic' => 'Select a topic',
                    'general' => 'General',
                    'sponsoring' => 'Sponsoring',
                    'event' => 'Event',
                ],

                'name' => 'Name',
                'email' => 'E-Mail Address',

                'message' => 'Your message',
            ],

        'button' => [

            'submit' => 'Submit',

        ],

        'notification' => [

            'success' => [

                'title' => 'Thank you!',
                'description' => 'We\'ve successfully received your message!',
            ],
        ],
    ],

];
