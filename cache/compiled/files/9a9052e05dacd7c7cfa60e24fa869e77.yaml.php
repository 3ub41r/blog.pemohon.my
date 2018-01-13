<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/blog.pemohon.my/user/config/site.yaml',
    'modified' => 1515828402,
    'data' => [
        'title' => 'pemohon.my',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Zubair',
            'email' => 'pemohon.my@gmail.com'
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
        ]
    ]
];
