<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/plugins/flex-directory/blueprints.yaml',
    'modified' => 1603433058,
    'data' => [
        'name' => 'Flex-Directory',
        'version' => '2.0.1',
        'description' => 'Simple Flexible Directory Plugin',
        'icon' => 'list',
        'author' => [
            'name' => 'Trilby Media',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://github.com/trilbymedia/grav-plugin-flex-directory',
        'keywords' => 'grav, plugin, crud, directory',
        'bugs' => 'https://github.com/trilbymedia/grav-plugin-flex-directory/issues',
        'docs' => 'https://github.com/trilbymedia/grav-plugin-flex-directory/blob/develop/README.md',
        'license' => 'MIT',
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
                'json_file' => [
                    'type' => 'text',
                    'label' => 'JSON File',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'blueprint_file' => [
                    'type' => 'text',
                    'label' => 'Blueprint File',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'extra_admin_twig_path' => [
                    'type' => 'text',
                    'label' => 'Extra Admin Twig Path',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'extra_site_twig_path' => [
                    'type' => 'text',
                    'label' => 'Extra Site Twig Path'
                ]
            ]
        ]
    ]
];
