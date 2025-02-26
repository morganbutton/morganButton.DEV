<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/themes/typhoon/blueprints/partials/header.yaml',
    'modified' => 1625095586,
    'data' => [
        'form' => [
            'fields' => [
                'header.header_bar.background' => [
                    'toggleable' => true,
                    'type' => 'select',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_BACKGROUND',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_BACKGROUND_HELP',
                    'config-default@' => 'theme.header_bar.background',
                    'options' => [
                        'auto' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_BACKGROUND_AUTO',
                        'light' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_BACKGROUND_LIGHT',
                        'dark' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_BACKGROUND_DARK',
                        'transparent' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_BACKGROUND_TRANSPARENT',
                        'custom' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_BACKGROUND_CUSTOM'
                    ]
                ],
                'header.header_bar.custom_style' => [
                    'toggleable' => true,
                    'type' => 'text',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_CUSTOM_BACKGROUND_STYLE',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_CUSTOM_BACKGROUND_STYLE_HELP',
                    'default' => 'linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%)'
                ],
                'header.header_bar.text' => [
                    'toggleable' => true,
                    'type' => 'select',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_TEXT',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_TEXT_HELP',
                    'config-default@' => 'theme.header_bar.text',
                    'options' => [
                        'auto' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_TEXT_AUTO',
                        'light' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_TEXT_LIGHT',
                        'dark' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_BAR_TEXT_DARK'
                    ]
                ],
                'header.show_children_in_secondary_menu' => [
                    'toggleable' => true,
                    'type' => 'toggle',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.HEADER_SHOW_CHILDREN',
                    'highlight' => 0,
                    'default' => 0,
                    'size' => 'medium',
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.menu_before_icon' => [
                    'type' => 'text',
                    'toggleable' => true,
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.MENU_BEFORE_ICON',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.MENU_BEFORE_ICON_HELP'
                ],
                'header.menu_after_icon' => [
                    'type' => 'text',
                    'toggleable' => true,
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.MENU_AFTER_ICON',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.MENU_AFTER_ICON_HELP'
                ],
                'header.menu_icon_classes' => [
                    'type' => 'text',
                    'toggleable' => true,
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.MENU_ICON_CLASSES',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.MENU_ICON_CLASSES_HELP'
                ]
            ]
        ]
    ]
];
