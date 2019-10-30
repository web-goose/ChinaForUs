<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sites/ChinaForUs/user/themes/chinaforus/blueprints/whoarewe.yaml',
    'modified' => 1572367248,
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
                        'block' => [
                            'type' => 'tab',
                            'title' => 'Настройки',
                            'fields' => [
                                'content_title' => [
                                    'type' => 'spacer',
                                    'title' => 'Параметры'
                                ],
                                'header.whoarewe.fieldset' => [
                                    'type' => 'fieldset',
                                    'title' => 'Команда проекта',
                                    'text' => 'Используйте для редактирования карусели в блоке WhoAreWe',
                                    'icon' => 'comments',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.whoarewe.title' => [
                                            'type' => 'text',
                                            'label' => 'Заголовок',
                                            'default' => 'Будем знакомы'
                                        ],
                                        'header.whoarewe.content' => [
                                            'type' => 'textarea',
                                            'default' => 'Мы ежедневно прикладываем все усилия, чтобы обеспечить наилучший сервис для вас и вашего бизнеса',
                                            'label' => 'Текст'
                                        ],
                                        'header.whoarewe.team' => [
                                            'name' => 'team',
                                            'type' => 'list',
                                            'style' => 'vertical',
                                            'fields' => [
                                                '.name' => [
                                                    'type' => 'text',
                                                    'help' => 'Текстовое поле',
                                                    'label' => 'Имя'
                                                ],
                                                '.role' => [
                                                    'type' => 'text',
                                                    'help' => 'Текстовое поле',
                                                    'label' => 'Роль'
                                                ],
                                                '.img' => [
                                                    'type' => 'file',
                                                    'label' => 'Изображение',
                                                    'help' => 'Избражение любого формата',
                                                    'destination' => 'theme@:/img/personal',
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
        ]
    ]
];
