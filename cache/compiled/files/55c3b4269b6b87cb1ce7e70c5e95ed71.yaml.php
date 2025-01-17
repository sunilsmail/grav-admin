<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/plugins/flex-objects/blueprints.yaml',
    'modified' => 1603433732,
    'data' => [
        'name' => 'Flex-Objects',
        'version' => '0.9.0',
        'description' => 'Flexible Objects Plugin',
        'icon' => 'list',
        'author' => [
            'name' => 'Trilby Media',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://github.com/trilbymedia/grav-plugin-flex-objects',
        'keywords' => 'grav, plugin, crud, directory',
        'bugs' => 'https://github.com/trilbymedia/grav-plugin-flex-objects/issues',
        'docs' => 'https://github.com/trilbymedia/grav-plugin-flex-objects/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'extra_admin_twig_path' => [
                    'type' => 'text',
                    'label' => 'Extra Admin Twig Path',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'object.cache.index.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Enable Index Caching',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'object.cache.index.timeout' => [
                    'type' => 'text',
                    'label' => 'Index Cache Timeout (s)',
                    'default' => 60,
                    'validate' => [
                        'type' => 'int'
                    ]
                ],
                'object.cache.object.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Enable Object Caching',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'object.cache.object.timeout' => [
                    'type' => 'text',
                    'label' => 'Object Cache Timeout (s)',
                    'default' => 60,
                    'validate' => [
                        'type' => 'int'
                    ]
                ],
                'object.cache.render.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Enable Render Caching',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'object.cache.render.timeout' => [
                    'type' => 'text',
                    'label' => 'Render Cache Timeout (s)',
                    'default' => 60,
                    'validate' => [
                        'type' => 'int'
                    ]
                ],
                'directories' => [
                    'type' => 'flex-objects',
                    'label' => 'Directories',
                    'validate' => [
                        'type' => 'item-list'
                    ]
                ]
            ]
        ]
    ]
];
