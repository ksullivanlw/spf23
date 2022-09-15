<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Stylesets
    |--------------------------------------------------------------------------
    |
    | Here you can define different style collections.
    | To add a new styleset you have to add a new array like the 'blog' array.
    |
    */

    'default' => [
        'h1' => 'headline',
        'a'  => 'link',
        'p' => 'text-sm',
        '.hero-text ul' => 'list-disc',
    ],
    'landinghead' => [
        'ul li' => 'list-disc',
        'a'  => 'link',
        'p' => 'text-sm',
    ],
    'banner' => [
        'a'  => 'font-bold text-purplebeach',
    ],

    // 'blog' => [
    //     'button' => 'button button--blue',
    //     'a'  => 'link',
    // ],
];
