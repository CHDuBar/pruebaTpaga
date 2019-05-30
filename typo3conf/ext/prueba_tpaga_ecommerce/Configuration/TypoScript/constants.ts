
plugin.tx_pruebatpagaecommerce_ecommercevideojuegos {
    view {
        # cat=plugin.tx_pruebatpagaecommerce_ecommercevideojuegos/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:prueba_tpaga_ecommerce/Resources/Private/Templates/
        # cat=plugin.tx_pruebatpagaecommerce_ecommercevideojuegos/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:prueba_tpaga_ecommerce/Resources/Private/Partials/
        # cat=plugin.tx_pruebatpagaecommerce_ecommercevideojuegos/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:prueba_tpaga_ecommerce/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pruebatpagaecommerce_ecommercevideojuegos//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_pruebatpagaecommerce_payregister {
    view {
        # cat=plugin.tx_pruebatpagaecommerce_payregister/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:prueba_tpaga_ecommerce/Resources/Private/Templates/
        # cat=plugin.tx_pruebatpagaecommerce_payregister/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:prueba_tpaga_ecommerce/Resources/Private/Partials/
        # cat=plugin.tx_pruebatpagaecommerce_payregister/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:prueba_tpaga_ecommerce/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pruebatpagaecommerce_payregister//a; type=string; label=Default storage PID
        storagePid =
    }
}

module.tx_pruebatpagaecommerce_listadooperaciones {
    view {
        # cat=module.tx_pruebatpagaecommerce_listadooperaciones/file; type=string; label=Path to template root (BE)
        templateRootPath = EXT:prueba_tpaga_ecommerce/Resources/Private/Backend/Templates/
        # cat=module.tx_pruebatpagaecommerce_listadooperaciones/file; type=string; label=Path to template partials (BE)
        partialRootPath = EXT:prueba_tpaga_ecommerce/Resources/Private/Backend/Partials/
        # cat=module.tx_pruebatpagaecommerce_listadooperaciones/file; type=string; label=Path to template layouts (BE)
        layoutRootPath = EXT:prueba_tpaga_ecommerce/Resources/Private/Backend/Layouts/
    }
    persistence {
        # cat=module.tx_pruebatpagaecommerce_listadooperaciones//a; type=string; label=Default storage PID
        storagePid =
    }
}
