<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale',
        'label' => 'identifier',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'identifier,amount,link_pay,status,idempotency_token,checkout,user_ip_address,buyer,purchased_product',
        'iconfile' => 'EXT:prueba_tpaga_ecommerce/Resources/Public/Icons/tx_pruebatpagaecommerce_domain_model_sale.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, identifier, amount, link_pay, status, idempotency_token, checkout, user_ip_address, buyer, purchased_product',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, identifier, amount, link_pay, status, idempotency_token, checkout, user_ip_address, buyer, purchased_product, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_pruebatpagaecommerce_domain_model_sale',
                'foreign_table_where' => 'AND tx_pruebatpagaecommerce_domain_model_sale.pid=###CURRENT_PID### AND tx_pruebatpagaecommerce_domain_model_sale.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'identifier' => [
            'exclude' => true,
            'label' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale.identifier',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'amount' => [
            'exclude' => true,
            'label' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale.amount',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'link_pay' => [
            'exclude' => true,
            'label' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale.link_pay',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale.status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
        'idempotency_token' => [
            'exclude' => true,
            'label' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale.idempotency_token',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'checkout' => [
            'exclude' => true,
            'label' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale.checkout',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'user_ip_address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale.user_ip_address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'buyer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale.buyer',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'fe_users',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'purchased_product' => [
            'exclude' => true,
            'label' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_pruebatpagaecommerce_domain_model_sale.purchased_product',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_pruebatpagaecommerce_domain_model_product',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
    
    ],
];
