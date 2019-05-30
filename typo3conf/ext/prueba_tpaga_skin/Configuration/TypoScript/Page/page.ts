# Se crea y se configura el sitio
page = PAGE
page {
	typeNum = 0
	shortcutIcon = EXT:prueba_tpaga_skin/Resources/Public/images/favicon.ico
	includeCSS {
		bootstrap = {$tx_pruebatpagaskin.filepaths.css}/bootstrap.css
		bfontawesome = {$tx_pruebatpagaskin.filepaths.css}/fontawesome-all.min.css
		fancybox = {$tx_pruebatpagaskin.filepaths.css}/fancybox.min.css
		owl-carousel = {$tx_pruebatpagaskin.filepaths.css}/owl.carousel.min.css
		owl-theme = {$tx_pruebatpagaskin.filepaths.css}/owl.theme.default.css
		slick = {$tx_pruebatpagaskin.filepaths.css}/slick.css
		slick-theme = {$tx_pruebatpagaskin.filepaths.css}/slick-theme.css
		ui = {$tx_pruebatpagaskin.filepaths.css}/ui.css
		responsive = {$tx_pruebatpagaskin.filepaths.css}/responsive.css
	}
	includeJS {
		jquery = {$tx_pruebatpagaskin.filepaths.js}/jquery-2.0.0.min.js
		bootstrap = {$tx_pruebatpagaskin.filepaths.js}/bootstrap.bundle.min.js
		fancybox = {$tx_pruebatpagaskin.filepaths.js}/fancybox.min.js
		owl-carousel = {$tx_pruebatpagaskin.filepaths.js}/owl.carousel.min.js
		slick = {$tx_pruebatpagaskin.filepaths.js}/slick.min.js
		script = {$tx_pruebatpagaskin.filepaths.js}/script.js
	}
	meta {
		description =
		description.override.field = description
		author =
		author.override.field = author
		keywords =
		keywords.override.field = keywords
		robots.value = all
		revisit-after = 1 hour
		copyright =
		distribution = all
		viewport = width=device-width, initial-scale=1, minimum-scale=0.5, maximum-scale=2.5, user-scalable=yes
		expires = 1
	}
	headerData {
		10 = TEXT
		10 {
			field = title
			noTrimWrap = |<title>|{$tx_pruebatpagaskin.parameters.titleComplement}: Universidad Nacional de Colombia</title>|
		}
	}
}
