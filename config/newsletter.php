<?php

return [

    /*
     * The API key of a MailChimp account. You can find yours at
     * https://us10.admin.mailchimp.com/account/api-key-popup/.
     */
    'apiKey' => env('MAILCHIMP_APIKEY'),

    /*
     * The listName to use when no listName has been specified in a method.
     */
    'defaultListName' => 'baselhack',

    /*
     * Here you can define properties of the lists.
     */
    'lists' => [


        'baselhack' => [

            'id' => env('MAILCHIMP_BASELHACK_LIST_ID'),
        ],


    ],

    /*
     * If you're having trouble with https connections, set this to false.
     */
    'ssl' => true,

];
