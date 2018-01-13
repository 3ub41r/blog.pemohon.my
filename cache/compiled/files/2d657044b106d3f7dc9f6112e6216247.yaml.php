<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/blog.pemohon.my/user/config/plugins/git-sync.yaml',
    'modified' => 1515837225,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://github.com/3ub41r/blog.pemohon.my.git',
        'user' => '3ub41r',
        'password' => 'gitsync-def50200e1eb1af426d7707d051b14050484a89a4e21f300230a138fd7ee8a27aab3de485936ddbf616b205cbc55accc85d941d51af506a6fc69bb09592908fa5ea1eadb02ffcb346acdae11c28f3fea858468536e58db362c4f8f1f2ea2',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
