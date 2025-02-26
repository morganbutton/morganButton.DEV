<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/themes/typhoon/blueprints/partials/colors.yaml',
    'modified' => 1625095586,
    'data' => [
        'form' => [
            'fields' => [
                'header.colors.text_style' => [
                    'toggleable' => true,
                    'type' => 'text',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.COLORS_DEFAULT_TEXT_COLOR',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.COLORS_DEFAULT_TEXT_COLOR_HELP',
                    'config-default@' => 'theme.colors.text_style'
                ],
                'header.colors.primary' => [
                    'toggleable' => true,
                    'type' => 'colorpicker',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.COLORS_PRIMARY_COLOR',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.COLORS_PRIMARY_COLOR_HELP',
                    'config-default@' => 'theme.colors.primary'
                ]
            ]
        ]
    ]
];
