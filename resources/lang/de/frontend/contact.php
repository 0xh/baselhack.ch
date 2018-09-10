<?php

return [

    'title' => 'Leave us a message!',
    'subtitle' => 'Happy to hear from you, whaterver the topic you have in mind.',

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
            'error' => [

                'title' => 'Ohhps!',
                'description' => 'Something went wrong. Please try again later!',
            ],
        ],
    ],

];
