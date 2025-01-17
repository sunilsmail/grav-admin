<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/plugins/xapi/languages.yaml',
    'modified' => 1603433474,
    'data' => [
        'en' => [
            'PLUGIN_XAPI' => [
                'ENABLE_PHP' => 'Enable Tincan PHP',
                'ENABLE_JS' => 'Enable Tincan JS',
                'LRS' => [
                    'LIST' => 'list of LRSs',
                    'HELP' => 'Add your LRS',
                    'FIELDS' => [
                        'NAMING' => 'Name (to be mapped to user\'s group)',
                        'ENDPOINT' => 'Endpoint (LRS\'s url)',
                        'USERNAME' => 'Username (LRS\'s username)',
                        'PASSWORD' => 'Password (LRS\'s password)',
                        'VERSION' => 'Version (LRS\'s version)'
                    ]
                ],
                'TEMPLATES' => [
                    'ACTIVITYTYPE' => [
                        'MAIN' => 'Activity types vs template',
                        'NAMING' => 'Template (to be mapped to an ActivityType) ',
                        'IRI' => 'ActivityType IRI (custom or from the registry https://registry.tincanapi.com/)'
                    ],
                    'VERB' => [
                        'MAIN' => 'Verbs vs template',
                        'NAMING' => 'Template (to be mapped to a Verb) ',
                        'IRI' => 'Verb IRI (custom or from the registry https://registry.tincanapi.com/#home/verbs)'
                    ]
                ],
                'FILTER' => [
                    'TITLE' => 'Filters',
                    'INFO' => 'all items listed bellow will not trigger xapi statements',
                    'HELP' => 'Add one item per line starting with an hyphen',
                    'TEMPLATE' => 'Do not track these templates',
                    'TAXO' => 'Do not track pages with these taxonomies',
                    'USERS' => 'Do no track these users\' activities',
                    'GROUPS' => 'Do not track users\' activities if they belong to these groups',
                    'URI' => [
                        'TITLE' => 'URL Filters (routes and queries)',
                        'ROUTES' => 'Routes that would not trigger statements',
                        'QUERY' => 'Url queries\' key/value pairs that would not trigger statements'
                    ]
                ]
            ]
        ]
    ]
];
