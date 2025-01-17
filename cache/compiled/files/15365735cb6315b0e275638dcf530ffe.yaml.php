<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/plugins/xapi/blueprints.yaml',
    'modified' => 1603433474,
    'data' => [
        'name' => 'Grav-Xapi',
        'version' => '0.3.0',
        'description' => 'Add to grav LRS connectivity and basic page activity statements tracking. Turns your favorite grav app into an simple Learning Management System.',
        'icon' => 'graduation-cap',
        'author' => [
            'name' => 'Gamahachaa',
            'email' => 'gamahachaa@gmail.com'
        ],
        'homepage' => 'https://github.com/gamahachaa/grav-xapi',
        'keywords' => 'grav, plugin, xapi, e-learning, knowledge management, LRS, LMS',
        'bugs' => 'https://github.com/gamahachaa/grav-xapi/issues',
        'docs' => 'https://github.com/gamahachaa/grav-xapi/blob/master/README.md',
        'license' => 'Apache 2.0',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'php.active' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_XAPI.ENABLE_PHP',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'js.active' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_XAPI.ENABLE_JS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'lrs' => [
                    'type' => 'list',
                    'style' => 'vertical',
                    'label' => 'PLUGIN_XAPI.LRS.LIST',
                    'fields' => [
                        '.naming' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_XAPI.LRS.FIELDS.NAMING'
                        ],
                        '.endpoint' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_XAPI.LRS.FIELDS.ENDPOINT'
                        ],
                        '.username' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_XAPI.LRS.FIELDS.USERNAME'
                        ],
                        '.password' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_XAPI.LRS.FIELDS.PASSWORD'
                        ],
                        '.version' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_XAPI.LRS.FIELDS.VERSION'
                        ]
                    ]
                ],
                'template_activityType' => [
                    'type' => 'list',
                    'style' => 'vertical',
                    'label' => 'PLUGIN_XAPI.TEMPLATES.ACTIVITYTYPE.MAIN',
                    'fields' => [
                        '.naming' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_XAPI.TEMPLATES.ACTIVITYTYPE.NAMING'
                        ],
                        '.activityIRI' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_XAPI.TEMPLATES.ACTIVITYTYPE.IRI'
                        ]
                    ]
                ],
                'template_verb' => [
                    'type' => 'list',
                    'style' => 'vertical',
                    'label' => 'PLUGIN_XAPI.TEMPLATES.VERB.MAIN',
                    'fields' => [
                        '.naming' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_XAPI.TEMPLATES.VERB.NAMING'
                        ],
                        '.verbIRI' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_XAPI.TEMPLATES.VERB.IRI'
                        ]
                    ]
                ],
                'filter' => [
                    'type' => 'fieldset',
                    'title' => 'PLUGIN_XAPI.FILTER.TITLE',
                    'info' => 'PLUGIN_XAPI.FILTER.INFO',
                    'icon' => 'filter',
                    'collapsed' => true,
                    'collapsible' => true,
                    'fields' => [
                        'filter.template' => [
                            'type' => 'array',
                            'label' => 'PLUGIN_XAPI.FILTER.TEMPLATE',
                            'value_only' => true
                        ],
                        'filter.taxonomies' => [
                            'type' => 'taxonomy',
                            'label' => 'PLUGIN_XAPI.FILTER.TAXO',
                            'multiple' => true,
                            'validate' => [
                                'type' => 'array'
                            ]
                        ],
                        'filter.users' => [
                            'type' => 'array',
                            'label' => 'PLUGIN_XAPI.FILTER.USERS',
                            'title' => 'TITLE',
                            'value_only' => true
                        ],
                        'filter.groups' => [
                            'type' => 'array',
                            'label' => 'PLUGIN_XAPI.FILTER.GROUPS',
                            'value_only' => true
                        ],
                        'uri' => [
                            'type' => 'fieldset',
                            'title' => 'PLUGIN_XAPI.FILTER.URI.TITLE',
                            'fields' => [
                                'filter.uri.routes' => [
                                    'type' => 'array',
                                    'label' => 'PLUGIN_XAPI.FILTER.URI.ROUTES',
                                    'value_only' => true
                                ],
                                'filter.uri.query' => [
                                    'type' => 'list',
                                    'label' => 'PLUGIN_XAPI.FILTER.URI.QUERY',
                                    'style' => 'horizontal',
                                    'fields' => [
                                        '.key' => [
                                            'type' => 'text',
                                            'label' => 'key'
                                        ],
                                        '.value' => [
                                            'type' => 'text',
                                            'label' => 'value'
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
