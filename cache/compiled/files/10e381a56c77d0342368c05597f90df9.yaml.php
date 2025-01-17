<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/themes/quark/blueprints/item.yaml',
    'modified' => 1602113430,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Blog Item',
                            'fields' => [
                                'header_options' => [
                                    'type' => 'section',
                                    'title' => 'Header Options',
                                    'underline' => true
                                ],
                                'header.continue_link' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'DF Style Link',
                                    'help' => 'Daring Fireball style title link',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.header_image' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Display Header Image',
                                    'help' => 'Enabled displaying of a header image',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ]
                                ],
                                'header.header_image_file' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image File',
                                    'help' => 'image filename that exists in the page folder. If not provided, will use the first image found.',
                                    'placeholder' => 'For example: myimage.jpg'
                                ],
                                'header.header_image_width' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image Width',
                                    'size' => 'small',
                                    'help' => 'Header width in px',
                                    'placeholder' => 'Default is 900',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 5000
                                    ]
                                ],
                                'header.header_image_height' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image Height',
                                    'size' => 'small',
                                    'help' => 'Header height in px',
                                    'placeholder' => 'Default is 300',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 5000
                                    ]
                                ],
                                'summary' => [
                                    'type' => 'section',
                                    'title' => 'Summary',
                                    'underline' => true
                                ],
                                'header.summary.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Summary',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ]
                                ],
                                'header.summary.format' => [
                                    'type' => 'select',
                                    'toggleable' => true,
                                    'label' => 'Format',
                                    'classes' => 'fancy',
                                    'options' => [
                                        'short' => 'Use the first occurence of delimiter or size',
                                        'long' => 'Summary delimiter will be ignored'
                                    ]
                                ],
                                'header.summary.size' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Size',
                                    'classes' => 'large',
                                    'placeholder' => 300,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.summary.delimiter' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Summary delimiter',
                                    'classes' => 'large',
                                    'placeholder' => '==='
                                ]
                            ],
                            'import@' => [
                                'type' => 'partials/blog-bits'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
