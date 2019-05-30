<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'CHDuBar.PruebaTpagaEcommerce',
            'Ecommercevideojuegos',
            'Ecommerce de Videojuegos'
        );

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'CHDuBar.PruebaTpagaEcommerce',
                'web', // Make module a submodule of 'web'
                'listadopedidos', // Submodule key
                '', // Position
                [
                    
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:prueba_tpaga_ecommerce/Resources/Public/Icons/user_mod_listadopedidos.svg',
                    'labels' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_listadopedidos.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('prueba_tpaga_ecommerce', 'Configuration/TypoScript', 'Ecommerce Videojuegos Tpaga');

    }
);
