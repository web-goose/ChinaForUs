<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sites/ChinaForUs/system/config/streams.yaml',
    'modified' => 1568886388,
    'data' => [
        'schemes' => [
            'image' => [
                'type' => 'Stream',
                'paths' => [
                    0 => 'user://images',
                    1 => 'system://images'
                ]
            ],
            'page' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://pages'
                ]
            ],
            'account' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://accounts'
                ]
            ]
        ]
    ]
];
