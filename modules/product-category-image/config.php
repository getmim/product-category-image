<?php

return [
    '__name' => 'product-category-image',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-category-image.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-category-image' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product-category' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product-category' => [
                'image' => [
                    'type' => 'media'
                ]
            ]
        ]
    ]
];