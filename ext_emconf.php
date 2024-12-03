<?php

########################################################################
# Extension Manager/Repository config file for ext "base_svg".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Complex Numbers Library',
    'description' => 'A library to deal with complex numbers. (PHPComplex)',
    'category' => 'misc',
    'version' => '3.0.3',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Mark Baker, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
