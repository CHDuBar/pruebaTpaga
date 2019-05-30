<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CHDuBar.PruebaTpagaEcommerce',
            'Ecommercevideojuegos',
            [
                'Product' => 'list, show, addCart',
                'Sale' => 'list, show, new, create, revert'
            ],
            // non-cacheable actions
            [
                'Product' => '',
                'Sale' => 'create, '
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    ecommercevideojuegos {
                        iconIdentifier = prueba_tpaga_ecommerce-plugin-ecommercevideojuegos
                        title = LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_prueba_tpaga_ecommerce_ecommercevideojuegos.name
                        description = LLL:EXT:prueba_tpaga_ecommerce/Resources/Private/Language/locallang_db.xlf:tx_prueba_tpaga_ecommerce_ecommercevideojuegos.description
                        tt_content_defValues {
                            CType = list
                            list_type = pruebatpagaecommerce_ecommercevideojuegos
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'prueba_tpaga_ecommerce-plugin-ecommercevideojuegos',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:prueba_tpaga_ecommerce/Resources/Public/Icons/user_plugin_ecommercevideojuegos.svg']
			);
		
    }
);
