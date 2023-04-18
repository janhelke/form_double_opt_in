<?php

$EM_CONF['form_double_opt_in'] = [
    'title' => 'Form Double Opt-In',
    'description' => 'Double Opt-In for the TYPO3 CMS Form Framework',
    'category' => 'plugin',
    'author' => 'Daniel Kestler',
    'author_email' => 'daniel.kestler@medienreaktor',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.8-11.5.99',
            'form' => '10.4.8-11.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
