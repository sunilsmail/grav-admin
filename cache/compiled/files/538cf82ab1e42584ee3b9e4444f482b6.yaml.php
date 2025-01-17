<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/plugins/flex-objects/blueprints/flex-objects/contacts.yaml',
    'modified' => 1603433732,
    'data' => [
        'title' => 'Contacts',
        'description' => 'Simple contact directory with tags.',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'list' => [
                    'title' => 'name',
                    'fields' => [
                        'published' => [
                            'width' => 8
                        ],
                        'last_name' => [
                            'link' => 'edit'
                        ],
                        'first_name' => [
                            'link' => 'edit'
                        ],
                        'email' => NULL,
                        'website' => NULL,
                        'tags' => NULL
                    ]
                ]
            ],
            'data' => [
                'storage' => 'user://data/flex-objects/contacts.json'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'published' => [
                    'type' => 'toggle',
                    'label' => 'Published',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ]
                ],
                'first_name' => [
                    'type' => 'text',
                    'label' => 'First Name',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'last_name' => [
                    'type' => 'text',
                    'label' => 'Last Name',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'email' => [
                    'type' => 'email',
                    'label' => 'Email Address',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'website' => [
                    'type' => 'url',
                    'label' => 'Web Site'
                ],
                'tags' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'Tags',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ]
            ]
        ]
    ]
];
