<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/plugins/flex-directory/blueprints/entries.yaml',
    'modified' => 1603433058,
    'data' => [
        'title' => 'Flex Directory',
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
                'last_name' => [
                    'type' => 'text',
                    'label' => 'Last Name',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'first_name' => [
                    'type' => 'text',
                    'label' => 'First Name'
                ],
                'email' => [
                    'type' => 'email',
                    'label' => 'Email',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'website' => [
                    'type' => 'text',
                    'label' => 'Website'
                ],
                'tags' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'Tags',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'tools_section' => [
                    'type' => 'section',
                    'field_classes' => 'overlay bottom',
                    'fields' => [
                        '_post_entries_save' => [
                            'label' => 'PLUGIN_FLEX_DIRECTORY.AFTER_SAVE',
                            'type' => 'save-redirect',
                            'default' => 'create-new'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
