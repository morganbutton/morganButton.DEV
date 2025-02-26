<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/moDev/user/config/plugins/nextgen-editor.yaml',
    'modified' => 1625095399,
    'data' => [
        'default_for_all' => true,
        'dev_host' => 'localhost',
        'dev_port' => 2000,
        'enabled' => true,
        'env' => 'production',
        'options' => [
            'markdownit' => [
                'breaks' => true,
                'highlight' => 'function (/*str, lang*/) { return \'\'; }',
                'html' => true,
                'langPrefix' => 'language-',
                'linkify' => false,
                'quotes' => '“”‘’',
                'typographer' => false,
                'xhtmlOut' => false
            ],
            'nextgenEditor' => [
                'height' => NULL,
                'toolbar' => [
                    'items' => [
                        0 => 'undo',
                        1 => 'redo',
                        2 => 'removeFormat',
                        3 => 'heading',
                        4 => 'bold',
                        5 => 'italic',
                        6 => 'underline',
                        7 => 'strikethrough',
                        8 => 'horizontalLine',
                        9 => 'link',
                        10 => 'imageUpload',
                        11 => 'blockQuote',
                        12 => 'numberedList',
                        13 => 'bulletedList',
                        14 => 'htmlEmbed',
                        15 => 'codeBlock',
                        16 => 'code',
                        17 => 'insertTable',
                        18 => 'mediaEmbed'
                    ],
                    'sticky' => true
                ],
                'htmlEmbed' => [
                    'showPreviews' => false
                ]
            ],
            'turndown' => [
                'bulletListMarker' => '*',
                'codeBlockStyle' => 'fenced',
                'emDelimiter' => '*',
                'headingStyle' => 'atx',
                'hr' => '---',
                'linkReferenceStyle' => 'full',
                'linkStyle' => 'inlined',
                'strongDelimiter' => '**',
                'preformattedCode' => false
            ],
            'transformations' => [
                'typography' => true,
                'quotes' => true,
                'symbols' => true,
                'mathematical' => true,
                'nonbreaking_space' => true,
                'custom' => NULL
            ]
        ]
    ]
];
