<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/system/blueprints/pages/partials/security.yaml',
    'modified' => 1625094034,
    'data' => [
        'form' => [
            'fields' => [
                '_site' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.PAGE_ACCESS',
                    'underline' => true,
                    'fields' => [
                        'header.login.visibility_requires_access' => [
                            'type' => 'toggle',
                            'toggleable' => true,
                            'label' => 'PLUGIN_ADMIN.PAGE_VISIBILITY_REQUIRES_ACCESS',
                            'help' => 'PLUGIN_ADMIN.PAGE_VISIBILITY_REQUIRES_ACCESS_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'header.access' => [
                            'type' => 'acl_picker',
                            'label' => 'PLUGIN_ADMIN.PAGE_ACCESS',
                            'help' => 'PLUGIN_ADMIN.PAGE_ACCESS_HELP',
                            'ignore_empty' => true,
                            'data_type' => 'access',
                            'validate' => [
                                'type' => 'array',
                                'value_type' => 'bool'
                            ]
                        ]
                    ]
                ],
                '_admin' => [
                    'security@' => [
                        'or' => [
                            0 => 'admin.super',
                            1 => 'admin.configuration.pages'
                        ]
                    ],
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.PAGE PERMISSIONS',
                    'underline' => true,
                    'fields' => [
                        'header.permissions.inherit' => [
                            'type' => 'toggle',
                            'toggleable' => true,
                            'label' => 'PLUGIN_ADMIN.PAGE_INHERIT_PERMISSIONS',
                            'help' => 'PLUGIN_ADMIN.PAGE_INHERIT_PERMISSIONS_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'header.permissions.authors' => [
                            'type' => 'list',
                            'toggleable' => true,
                            'label' => 'PLUGIN_ADMIN.PAGE_AUTHORS',
                            'help' => 'PLUGIN_ADMIN.PAGE_AUTHORS_HELP',
                            'fields' => [
                                'value' => [
                                    'type' => 'text',
                                    'placeholder' => 'PLUGIN_ADMIN.USERNAME',
                                    'style' => 'vertical'
                                ]
                            ]
                        ],
                        'header.permissions.groups' => [
                            'ignore@' => true,
                            'type' => 'acl_picker',
                            'label' => 'PLUGIN_ADMIN.PAGE_GROUPS',
                            'help' => 'PLUGIN_ADMIN.PAGE_GROUPS_HELP',
                            'ignore_empty' => true,
                            'data_type' => 'permissions'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
