<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sites/ChinaForUs/user/themes/chinaforus/blueprints/reviews.yaml',
    'modified' => 1572280534,
    'data' => [
        'extends@' => 'default',
        'child_type' => 'item',
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.child_type' => [
                                            'default' => 'item'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Настройка страницы',
                            'fields' => [
                                'content_title' => [
                                    'type' => 'spacer',
                                    'title' => 'Параметры'
                                ],
                                'header.isIndex' => [
                                    'type' => 'toggle',
                                    'label' => 'Это главная страница?',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Да',
                                        0 => 'Нет'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.reviews' => [
                                    'name' => 'list',
                                    'type' => 'list',
                                    'collapsed' => true,
                                    'style' => 'vertical',
                                    'label' => 'Отзывы',
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'Имя'
                                        ],
                                        '.review' => [
                                            'type' => 'textarea',
                                            'label' => 'Отзыв'
                                        ],
                                        '.img' => [
                                            'type' => 'file',
                                            'label' => 'Изображение',
                                            'destination' => 'theme@:/img/reviews',
                                            'multiple' => false,
                                            'filesize' => 1,
                                            'accept' => [
                                                0 => 'image/*'
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
