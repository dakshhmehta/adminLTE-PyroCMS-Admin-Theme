<?php

return [
    'display'       => [
        'required' => true,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'default_value' => 'blue',
            'mode'          => 'dropdown',
            'options'       => [
                'blue' => 'Blue',
                'green' => 'Green',
            ],
        ],
    ],
];
