<?php

return [
    'srcsets' => [
        'default' => [
            '300w' => ['width' => 300, 'quality' => 80],
            '600w' => ['width' => 600, 'quality' => 80],
            '900w' => ['width' => 900, 'quality' => 80],
            '1200w' => ['width' => 1200, 'quality' => 80],
            '1800w' => ['width' => 1800, 'quality' => 80]
        ],
        'square' => [
            '300w' => ['width' => 300, 'height' => 300, 'quality' => 80, 'crop' => 'center'],
            '600w' => ['width' => 600, 'height' => 600, 'quality' => 80, 'crop' => 'center'],
            '900w' => ['width' => 900, 'height' => 900, 'quality' => 80, 'crop' => 'center'],
            '1200w' => ['width' => 1200, 'height' => 1200, 'quality' => 80, 'crop' => 'center'],
            '1800w' => ['width' => 1800, 'height' => 1800, 'quality' => 80, 'crop' => 'center']
        ],
        'avif' => [
            '300w' => ['width' => 300, 'quality' => 80, 'format' => 'avif'],
            '600w' => ['width' => 600, 'quality' => 80, 'format' => 'avif'],
            '900w' => ['width' => 900, 'quality' => 80, 'format' => 'avif'],
            '1200w' => ['width' => 1200, 'quality' => 80, 'format' => 'avif'],
            '1800w' => ['width' => 1800, 'quality' => 80, 'format' => 'avif']
        ],
        'webp' => [
            '300w' => ['width' => 300, 'quality' => 80, 'format' => 'webp'],
            '600w' => ['width' => 600, 'quality' => 80, 'format' => 'webp'],
            '900w' => ['width' => 900, 'quality' => 80, 'format' => 'webp'],
            '1200w' => ['width' => 1200, 'quality' => 80, 'format' => 'webp'],
            '1800w' => ['width' => 1800, 'quality' => 80, 'format' => 'webp']
        ]
        // more src-sets as needed
    ],
    'format' => 'webp',
    'driver' => 'gd'
];