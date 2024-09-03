<?php

return [
    'disk' => env('FILESYSTEM_DRIVER', 'local'),

    'allowed_sizes' => [
        '500x300',
        '500x100',
        '1000x300',
        '171x171',
        '375x252',
        '573x374',
        '115x115',
        '375x376',
        '276x322',
        '85x94',
        '280x406',
        '186x186',
        '375x252',
        '229x160',
        '120x120',
        '137x155'
    ],

    'defaults' => [
        'field' => 'thumbnail',
        'dir' => 'images',
        'size' => '500x300',
        'method' => 'resize',
    ]
];
