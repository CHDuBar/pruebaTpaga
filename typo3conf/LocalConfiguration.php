<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$4pyfpj18ZRTA6o.1MART.A$i5YQezWvWfyo4Dy/VHEYDfgULnudpSui7eWbI5VdZdU',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'pruebatpaga',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'password' => 'm1iFXRXyylcJNvL4',
                'port' => 3306,
                'user' => 'pruebatpaga',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'bootstrap_grids' => 'a:1:{s:19:"enableGridSimpleRow";s:1:"0";}',
            'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
            'fh_debug' => 'a:26:{s:9:"IPADDRESS";s:3:"::1";s:10:"DEBUGBEGIN";s:1:"0";s:10:"TYPO3_MODE";s:2:"FE";s:11:"FEUSERNAMES";s:0:"";s:9:"DEBUGFILE";s:20:"fileadmin/debug.html";s:9:"ERROR_LOG";s:0:"";s:13:"USE_ERROR_LOG";s:1:"0";s:6:"IGNORE";s:0:"";s:10:"STARTFILES";s:0:"";s:13:"DEBUGFILEMODE";s:2:"wb";s:11:"TRACEFIELDS";s:20:"file, line, function";s:10:"TRACEDEPTH";s:1:"5";s:20:"TRACEDEPTH_EXCEPTION";s:2:"12";s:4:"HTML";s:1:"1";s:5:"LEVEL";s:1:"3";s:11:"APPENDDEPTH";s:1:"3";s:7:"CSSPATH";s:12:"EXT:fh_debug";s:7:"CSSFILE";s:11:"fhdebug.css";s:6:"DEVLOG";s:1:"0";s:6:"SYSLOG";s:1:"0";s:14:"SYSLOG_EXCLUDE";s:8:"no_cache";s:22:"OOPS_AN_ERROR_OCCURRED";s:1:"1";s:5:"PROXY";s:1:"0";s:5:"TITLE";s:20:"Debug for my website";s:11:"MAXFILESIZE";s:1:"3";s:8:"DATETIME";s:12:"H:i:s  d.m.Y";}',
            'gridelements' => 'a:6:{s:20:"additionalStylesheet";s:0:"";s:19:"nestingInListModule";s:1:"0";s:26:"overlayShortcutTranslation";s:1:"0";s:19:"disableDragInWizard";s:1:"0";s:25:"disableCopyFromPageButton";s:1:"0";s:38:"disableAutomaticUnusedColumnCorrection";s:1:"0";}',
            'prueba_tpaga_ecommerce' => 'a:0:{}',
            'prueba_tpaga_skin' => 'a:0:{}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rte_ckeditor' => 'a:1:{s:15:"ckeditorVersion";s:6:"latest";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'static_info_tables' => 'a:1:{s:13:"enableManager";s:1:"0";}',
        ],
    ],
    'FE' => [
        'debug' => true,
        'enableRecordRegistration' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => 1,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcuBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'enableDeprecationLog' => 'file',
        'encryptionKey' => '9ffa737fad5c5f225008e359a5dcc52709d40534da60e9bf30ccaca5744865701ef2ae9cf7c0fc822e9a47c7a20d9a26',
        'exceptionalErrors' => 28674,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'Comercio de Venta de Videojuegos',
        'sqlDebug' => 1,
        'systemLogLevel' => 0,
    ],
];
