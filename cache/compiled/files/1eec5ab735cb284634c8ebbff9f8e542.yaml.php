<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sites/ChinaForUs/user/themes/chinaforus/blueprints/faq.yaml',
    'modified' => 1572280614,
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
                                'header.faqList' => [
                                    'name' => 'list',
                                    'type' => 'list',
                                    'collapsed' => true,
                                    'style' => 'vertical',
                                    'label' => 'Список Вопрос-Ответов',
                                    'fields' => [
                                        '.question' => [
                                            'type' => 'text',
                                            'label' => 'Вопрос'
                                        ],
                                        '.answer' => [
                                            'type' => 'textarea',
                                            'label' => 'Ответ'
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
