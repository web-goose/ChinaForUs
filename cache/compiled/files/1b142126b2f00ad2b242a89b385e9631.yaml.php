<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sites/ChinaForUs/user/plugins/admin-power-tools/blueprints/child-pages.yaml',
    'modified' => 1572434828,
    'data' => [
        'name' => 'foo',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'type' => 'tab',
                            'fields' => [
                                'columns' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'order-child' => [
                                                    'type' => 'order-child',
                                                    'label' => 'Child Pages:',
                                                    'sitemap' => NULL
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
