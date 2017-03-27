<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Inventory List',
    'description' => 'An extension to manage a stock.',
    'category' => 'plugin',
    'author' => 'Max "TYPO3 BOSS" Seifert',
    'author_company' => '',
    'author_email' => '',
    'dependencies' => 'extbase,fluid',
    'state' => 'alpha',
    'clearCacheOnLoad' => '1',
    'version' => '0.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.3.0-8.3.99',
            'extbase' => '1.0.0-0.0.0',
            'fluid' => '1.0.0-0.0.0',
        )
    )
);