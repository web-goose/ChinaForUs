<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sites/ChinaForUs/user/plugins/admin-power-tools/services/../blueprints/new-page-custom.yaml',
    'modified' => 1572434828,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Page Like ...'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.PAGE_TITLE',
                    'help' => 'PLUGIN_ADMIN.PAGE_TITLE_HELP',
                    'validate' => [
                        'required' => false
                    ]
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'help' => 'PLUGIN_ADMIN.FOLDER_NAME_HELP',
                    'description' => 'Leave blank to generate from title.',
                    'validate' => [
                        'rule' => 'slug',
                        'required' => false
                    ]
                ],
                'page_like' => [
                    'type' => 'pages',
                    'label' => 'Like page',
                    'help' => 'Page to use as template',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'use_parent' => [
                    'type' => 'toggle',
                    'label' => 'Copy parent',
                    'help' => 'Copy the template\'s parent page',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'use_template' => [
                    'type' => 'toggle',
                    'label' => 'Copy template',
                    'help' => 'Copy the template\'s template',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'use_taxonomy' => [
                    'type' => 'toggle',
                    'label' => 'Copy taxonomy',
                    'help' => 'Copy the template\'s taxonomy',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'use_body_classes' => [
                    'type' => 'toggle',
                    'label' => 'Copy body classes',
                    'help' => 'Copy the template\'s body classes',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'use_content' => [
                    'type' => 'toggle',
                    'label' => 'Copy content',
                    'help' => 'Copy the template\'s content',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'use_title' => [
                    'type' => 'toggle',
                    'label' => 'Copy title',
                    'help' => 'Copy the template\'s title',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'use_media' => [
                    'type' => 'toggle',
                    'label' => 'Copy media',
                    'help' => 'Copy the template\'s media',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
