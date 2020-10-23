<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/config/plugins/flex-objects.yaml',
    'modified' => 1603433853,
    'data' => [
        'enabled' => false,
        'built_in_css' => true,
        'extra_admin_twig_path' => 'theme://admin/templates',
        'object' => [
            'cache' => [
                'index' => [
                    'enabled' => true,
                    'timeout' => 60
                ],
                'object' => [
                    'enabled' => true,
                    'timeout' => 60
                ],
                'render' => [
                    'enabled' => true,
                    'timeout' => 60
                ]
            ]
        ],
        'directories' => [
            0 => 'plugin://flex-objects/blueprints/flex-objects/contacts.yaml'
        ]
    ]
];
