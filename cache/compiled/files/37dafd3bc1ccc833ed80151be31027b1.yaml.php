<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/themes/typhoon/blueprints/blog.yaml',
    'modified' => 1625095586,
    'data' => [
        'title' => 'Blog',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'content' => [
                                    'unset@' => true
                                ],
                                'header.media_order' => [
                                    'ordering@' => 99
                                ]
                            ]
                        ],
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Posts',
                            'ordering@' => 2,
                            'fields' => [
                                'blog_config_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_CONFIGURATION',
                                    'underline' => true,
                                    'fields' => [
                                        'header.root_of_blog' => [
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ROOT',
                                            'default' => 1,
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.content.items' => [
                                            'type' => 'textarea',
                                            'yaml' => true,
                                            'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ITEMS',
                                            'default' => '@self.children',
                                            'validate' => [
                                                'required' => true,
                                                'type' => 'yaml'
                                            ]
                                        ],
                                        'header.content.filter' => [
                                            'type' => 'textarea',
                                            'yaml' => true,
                                            'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_FILTER',
                                            'placeholder' => 'published: true',
                                            'validate' => [
                                                'required' => false,
                                                'type' => 'yaml'
                                            ]
                                        ],
                                        'header.content.limit' => [
                                            'type' => 'number',
                                            'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_MAX_ITEM_COUNT',
                                            'default' => 10,
                                            'validate' => [
                                                'required' => true,
                                                'type' => 'int',
                                                'min' => 1
                                            ]
                                        ],
                                        'header.content.order.by' => [
                                            'type' => 'select',
                                            'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ORDER_BY',
                                            'default' => 'date',
                                            'options' => [
                                                'folder' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ORDER_BY_FOLDER',
                                                'title' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ORDER_BY_TITLE',
                                                'date' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ORDER_BY_DATE',
                                                'default' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ORDER_BY_DEFAULT'
                                            ]
                                        ],
                                        'header.content.order.dir' => [
                                            'type' => 'select',
                                            'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ORDER',
                                            'default' => 'desc',
                                            'options' => [
                                                'asc' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ORDER_ASC',
                                                'desc' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_ORDER_DESC'
                                            ]
                                        ],
                                        'header.content.url_taxonomy_filters' => [
                                            'toggleable' => true,
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_TAXONOMY_FILTERS',
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
                                        'header.content.pagination' => [
                                            'toggleable' => true,
                                            'type' => 'toggle',
                                            'label' => 'THEME_TYPHOON.BLUEPRINTS.BLOG_PAGINATION',
                                            'highlight' => 1,
                                            'default' => 1,
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
                                'blog_layout_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.BLUEPRINTS.LAYOUT_CONFIGURATION',
                                    'underline' => true,
                                    'ordering@' => 1,
                                    'import@' => [
                                        'type' => 'partials/blog'
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
