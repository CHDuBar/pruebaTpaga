<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'User>User Settings',
    'description' => 'Allows users to edit a limited set of options for their user profile, eg. preferred language and their name and email address.',
    'category' => 'module',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '8.7.26',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.2.99',
            'typo3' => '8.7.26',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
