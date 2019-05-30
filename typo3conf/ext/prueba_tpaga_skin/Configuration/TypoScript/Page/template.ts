
# Create a Fluid Template
page.10 = FLUIDTEMPLATE
page.10 {
	# Set the Template Pathes
	partialRootPaths {
		1 = {$tx_pruebatpagaskin.filepaths.pri}/Partials/
	}
	layoutRootPaths {
		1 = {$tx_pruebatpagaskin.filepaths.pri}/Layouts/
	}
	variables {
		comercioskin_currentLang = TEXT
		comercioskin_currentLang.value = {$tx_pruebatpagaskin.parameters.currentLang}
		comercioskin_langMenu = HMENU
		comercioskin_langMenu {
			special = language
			special.value = {$tx_pruebatpagaskin.parameters.languageCodes}
			special.normalWhenNoLanguage = 0
			1 = TMENU
			1 {
				# Item normal
				NO {
					stdWrap.cObject = TEXT
					stdWrap.cObject.value = {$tx_pruebatpagaskin.parameters.languageId}
					allWrap = <li> | </li>
				}
				# Item activo
#				ACT = 1
#				ACT.doNotShowLink = 1
				# Item normal (cuando no existe una versión traducida de la página)
				USERDEF1 = 1
				USERDEF1.doNotShowLink = 1
				# Item activo (cuando no existe una versión traducida de la página)
				USERDEF2 = 1
				USERDEF2.doNotShowLink = 1
			}
		}
		comercioskin_facebook = TEXT
		comercioskin_facebook.value = {$tx_pruebatpagaskin.parameters.socialLinks.facebook}
		comercioskin_twitter = TEXT
		comercioskin_twitter.value = {$tx_pruebatpagaskin.parameters.socialLinks.twitter}
		comercioskin_rss = TEXT
		comercioskin_rss.value = {$tx_pruebatpagaskin.parameters.socialLinks.rss}
		comercioskin_youtube = TEXT
		comercioskin_youtube.value = {$tx_pruebatpagaskin.parameters.socialLinks.youtube}
		comercioskin_aspirantes = TEXT
		comercioskin_aspirantes.value = {$tx_pruebatpagaskin.parameters.profiles.aspirantes}
		comercioskin_estudiantes = TEXT
		comercioskin_estudiantes.value = {$tx_pruebatpagaskin.parameters.profiles.estudiantes}
		comercioskin_egresados = TEXT
		comercioskin_egresados.value = {$tx_pruebatpagaskin.parameters.profiles.egresados}
		comercioskin_docentes = TEXT
		comercioskin_docentes.value = {$tx_pruebatpagaskin.parameters.profiles.docentes}
		comercioskin_administrativos = TEXT
		comercioskin_administrativos.value = {$tx_pruebatpagaskin.parameters.profiles.administrativos}
		comercioskin_subdomain = TEXT
		comercioskin_subdomain.data = getEnv:HTTP_HOST
		comercioskin_servicesMenu < lib.servicesMenu
		comercioskin_showFinder = TEXT
		comercioskin_showFinder.value = {$tx_pruebatpagaskin.parameters.showFinder}
		comercioskin_contenido < styles.content.get
		comercioskin_sitemapLinkUid = TEXT
		comercioskin_sitemapLinkUid.value = {$tx_pruebatpagaskin.parameters.sitemapLinkUid}
		comercioskin_faqLinkUid = TEXT
		comercioskin_faqLinkUid.value = {$tx_pruebatpagaskin.parameters.faqLinkUid}
		comercioskin_contactLinkUid = TEXT
		comercioskin_contactLinkUid.value = {$tx_pruebatpagaskin.parameters.contactLinkUid}
		comercioskin_glosaryLinkUid = TEXT
		comercioskin_glosaryLinkUid.value = {$tx_pruebatpagaskin.parameters.glosaryLinkUid}
		comercioskin_contactAddress = TEXT
		comercioskin_contactAddress.value = {$tx_pruebatpagaskin.parameters.contact.address}
		comercioskin_contactBuilding = TEXT
		comercioskin_contactBuilding.value = {$tx_pruebatpagaskin.parameters.contact.building}
		comercioskin_contactCity = TEXT
		comercioskin_contactCity.value = {$tx_pruebatpagaskin.parameters.contact.city}
		comercioskin_contactPhone = TEXT
		comercioskin_contactPhone.value = {$tx_pruebatpagaskin.parameters.contact.phone}
		comercioskin_contactEmailAccount = TEXT
		comercioskin_contactEmailAccount.value = {$tx_pruebatpagaskin.parameters.contact.emailAccount}
		comercioskin_aboutLinkUid = TEXT
		comercioskin_aboutLinkUid.value = {$tx_pruebatpagaskin.parameters.aboutLinkUid}
		comercioskin_lastUpdateDate = TEXT
		comercioskin_lastUpdateDate {
			data = page:SYS_LASTCHANGED
			if.isTrue.data = page:SYS_LASTCHANGED
			date >
			strftime = %d/%m/%Y
			data = register:SYS_LASTCHANGED
			if >
		}
	} # end Variables
	# Assign the Template files with the Fluid Backend-Template
	file.stdWrap.cObject = CASE
	file.stdWrap.cObject {
		key.data = levelfield:-1, backend_layout_next_level, slide
		key.override.field = backend_layout
		# Set the default Template, our 3 column Template
		default = TEXT
		default.value = {$tx_pruebatpagaskin.filepaths.pri}/Templates/Page.html
	}
}