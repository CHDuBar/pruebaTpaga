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
                'listadooperaciones', // Submodule key
                '', // Position
                [
                    'Sale' => 'list, show',
                    
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:prueba_tpaga_ecommerce/Resources/Public/Icons/user_mod_listadooperaciones.svg',
                    'labels' => 'LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_listadooperaciones.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('prueba_tpaga_ecommerce', 'Configuration/TypoScript', 'Ecommerce Videojuegos Tpaga');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pruebatpagaecommerce_domain_model_product', 'EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_csh_tx_pruebatpagaecommerce_domain_model_product.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pruebatpagaecommerce_domain_model_product');

    }
);
