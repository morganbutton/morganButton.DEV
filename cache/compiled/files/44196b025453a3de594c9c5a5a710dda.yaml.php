<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/plugins/form/blueprints.yaml',
    'modified' => 1625094042,
    'data' => [
        'name' => 'Form',
        'slug' => 'form',
        'type' => 'plugin',
        'version' => '5.0.3',
        'description' => 'Enables the forms handling',
        'icon' => 'check-square',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'https://getgrav.org'
        ],
        'keywords' => 'plugin, form',
        'homepage' => 'https://github.com/getgrav/grav-plugin-form',
        'bugs' => 'https://github.com/getgrav/grav-plugin-form/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
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
                'general' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.GENERAL',
                    'fields' => [
                        'built_in_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.USE_BUILT_IN_CSS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'inline_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.USE_INLINE_CSS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'refresh_prevention' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.REFRESH_PREVENTION',
                            'help' => 'PLUGIN_FORM.REFRESH_PREVENTION_HELP',
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
                        'client_side_validation' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.CLIENT_SIDE_VALIDATION',
                            'help' => 'PLUGIN_FORM.CLIENT_SIDE_VALIDATION_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'inline_errors' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.INLINE_ERRORS',
                            'help' => 'PLUGIN_FORM.INLINE_ERRORS_HELP',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'files' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.FILES',
                    'fields' => [
                        'files.multiple' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.ALLOW_MULTIPLE',
                            'help' => 'PLUGIN_FORM.ALLOW_MULTIPLE_HELP',
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
                        'files.limit' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGIN_FORM.LIMIT',
                            'help' => 'PLUGIN_FORM.LIMIT_HELP',
                            'default' => 10,
                            'validate' => [
                                'type' => 'number',
                                'min' => 1
                            ]
                        ],
                        'files.destination' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'PLUGIN_FORM.DESTINATION',
                            'help' => 'PLUGIN_FORM.DESTINATION_HELP',
                            'default' => '@self'
                        ],
                        'files.accept' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGIN_FORM.ACCEPT',
                            'help' => 'PLUGIN_FORM.ACCEPT_HELP',
                            'classes' => 'fancy',
                            'default' => [
                                0 => 'image/*'
                            ],
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'files.filesize' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.FILESIZE',
                            'help' => 'PLUGIN_FORM.FILESIZE_HELP',
                            'size' => 'x-small',
                            'default' => 5,
                            'validate' => [
                                'type' => 'number',
                                'min' => 0
                            ]
                        ],
                        'files.avoid_overwriting' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.AVOID_OVERWRITING',
                            'help' => 'PLUGIN_FORM.AVOID_OVERWRITING_HELP',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'files.random_name' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.RANDOM_NAME',
                            'help' => 'PLUGIN_FORM.RANDOM_NAME_HELP',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'recaptcha' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.RECAPTCHA',
                    'fields' => [
                        'recaptcha.version' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_VERSION',
                            'default' => '2-checkbox',
                            'options' => [
                                '2-checkbox' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_CHECKBOX',
                                '2-invisible' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_INVISIBLE',
                                3 => 'PLUGIN_FORM.RECAPTCHA_VERSION_V3_LATEST'
                            ]
                        ],
                        'recaptcha.theme' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_THEME',
                            'default' => 'light',
                            'options' => [
                                'light' => 'PLUGIN_FORM.RECAPTCHA_THEME_LIGHT',
                                'dark' => 'PLUGIN_FORM.RECAPTCHA_THEME_DARK'
                            ],
                            'recaptcha.site_key' => NULL
                        ],
                        'recaptcha.site_key' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                            'help' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY_HELP',
                            'default' => ''
                        ],
                        'recaptcha.secret_key' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                            'help' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY_HELP',
                            'default' => ''
                        ]
                    ]
                ]
            ]
        ]
    ]
];
