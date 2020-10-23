<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://xapi/xapi.yaml',
    'modified' => 1603433478,
    'data' => [
        'enabled' => true,
        'php' => [
            'active' => true
        ],
        'js' => [
            'active' => false
        ],
        'lrs' => [
            0 => [
                'naming' => 'default',
                'endpoint' => 'https://mylrs/data/xAPI',
                'username' => '3b5d9d1f2fc76e9cdb663f311613d5663fc694d1',
                'password' => 'fa4a6689c00153b393905e095f44510d34138195',
                'version' => '1.0.1'
            ]
        ],
        'template_activityType' => [
            0 => [
                'naming' => 'default',
                'activityIRI' => 'http://activitystrea.ms/schema/1.0/page'
            ]
        ],
        'template_verb' => [
            0 => [
                'naming' => 'default',
                'verbIRI' => 'http://activitystrea.ms/schema/1.0/read'
            ]
        ],
        'filter' => [
            'template' => [
                0 => 'login'
            ],
            'taxonomies' => [
                'category' => [
                    0 => 'reporting'
                ]
            ],
            'users' => [
                0 => 'jdoe'
            ],
            'groups' => [
                0 => 'management'
            ],
            'uri' => [
                'query' => [
                    0 => [
                        'key' => 'search',
                        'value' => 'test'
                    ]
                ]
            ]
        ]
    ]
];
