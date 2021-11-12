<?php

/**
 * Extension Manager/Repository config file for ext "kjg_sommerlager_layout2021".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'KjG Sommerlager Layout 2021',
    'description' => 'Layout der Sommerlagerseite ab 2021  Fluid  Bootstrap',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'KjgSommerlagerStRupert\\KjgSommerlagerLayout2021\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Frank Mattes',
    'author_email' => 'frank.mattes@kjg-st-rupert.de',
    'author_company' => 'KjG Sommerlager St. Rupert',
    'version' => '1.0.0',
];
