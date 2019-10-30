<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/sites/ChinaForUs/user/config/site.yaml',
    'modified' => 1572435016,
    'data' => [
        'title' => 'ChinaForUs',
        'default_lang' => 'ru',
        'author' => [
            'name' => 'webgoose.ru',
            'email' => 'support@webgoose.ru'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'contacts' => [
            'phone' => '86 139 5794 5181',
            'email' => 'chinaforuspost@gmail.com',
            'instagram' => 'https://instagram.com/chinaforus'
        ]
    ]
];
