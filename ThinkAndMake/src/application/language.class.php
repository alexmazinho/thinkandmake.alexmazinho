<?php

// $ xgettext -n *.php [--o messages.po] --> Generate messages.po , plural nplurals=2; plural=n != 1;
// Desde PoEdit activar Catàleg > Paràmetres > Camins --> Camí base locale de traduccions --> camins als fichers font (php, html)
// El locale ha d'estar instal·lat  $locale -a http://people.debian.org/~schultmc/locales.html
// $ sudo dpkg-reconfigure locales   --> per instal·lar a debian
// passthru("locale -a");   --> per comprovar si el servidor les té instal·lades


class Language {
	const LANG_DOMAIN = 'messages';
	const LANG_CODESET = 'UTF8';
	const LANG_DEFAULT = 'es';
	
	/*
	 * @the registry
	 * @access private
	 */
	private $registry;

	/*
	 * @Languages array
	 * @access private
	 */
	private static $langs = array(
			'es' => array('locale' => 'es_ES.UTF8'),
			'ca' => array('locale' => 'ca_ES.UTF8'),
			'en' => array('locale' => 'en_US.UTF8'),
			'fr' => array('locale' => 'fr_FR.UTF8'),
	);
	

	public static $seoDefault = array('title' => 'seo-home-title',
										'desc' => 'seo-home-desc',
										'words' => 'seo-home-words'
										);

	private function _s() {
		/* No s'utilitza, només per a que Poedit reconegui les traduccions del SEO */
		_('seo-home-title');
		_('seo-home-desc');
		_('seo-home-words');
		_('seo-un-concepto-diferente-title');
		_('seo-un-concepto-diferente-desc');
		_('seo-un-concepto-diferente-words');
		
	}
	
	
	/*
	 * @URL's array
	* @access private
	*/
	private static $urls = array(
			'un-concepto-diferente' => array('controller' => 'menu', 'action' => 'text', 'page' => 0,
											 'es' => 'un-concepto-diferente', 
											 'ca' => 'un-concepte-diferent',
											 'seo' => array('title' => 'seo-un-concepto-diferente-title', 
															 'desc' => 'seo-un-concepto-diferente-desc',
															 'words' => 'seo-un-concepto-diferente-words',
											 )
											),
			'que-somos' 			=> array('controller' => 'menu', 'action' => 'text', 'page' => 1,
											 'es' => 'que-somos', 
											 'ca' => 'que-som',
											 'seo' => array('title' => '',
															 'desc' => '',
															 'words' => '',
											  )
											 ),
			'quienes-somos' 		=> array('controller' => 'menu', 'action' => 'text', 'page' => 2,
											 'es' => 'quienes-somos', 
											 'ca' => 'qui-som',
											 'seo' => array('title' => '',
															 'desc' => '',
															 'words' => '',
											  )
											 ),
			'joaquim-balsera' 		=> array('controller' => 'menu', 'action' => 'text', 'page' => 3,
											 'es' => 'joaquim-balsera', 
											 'ca' => 'joaquim-balsera',
											 'seo' => array('title' => '',
															 'desc' => '',
															 'words' => '',
											  )
											 ),
			'fernando-macia' 		=> array('controller' => 'menu', 'action' => 'text', 'page' => 4,
											 'es' => 'fernando-macia',
											 'ca' => 'fernando-macia',
											 'seo' => array('title' => '',
															 'desc' => '',
															 'words' => '',
											  )
											 ),
			'nuestra-razon-de-ser' 	=> array('controller' => 'menu', 'action' => 'text', 'page' => 5,	
											 'es' => 'nuestra-razon-de-ser', 
											 'ca' => 'la-nostra-rao-de-ser',
											 'seo' => array('title' => '',
															 'desc' => '',
															 'words' => '',
											  )
											 ),
			'marca-de-ciudad' 		=> array('controller' => 'menu', 'action' => 'textbox', 'page' => 6,	
											 'es' => 'marca-de-ciudad', 
											 'ca' => 'marca-de-ciutat',
											 'seo' => array('title' => '',
															 'desc' => '',
															 'words' => '',
											  )
											 ),
			'trabajos' 				=> array('controller' => 'menu', 'action' => 'image', 'page' => 7,
											 'es' => 'trabajos',
									 		 'ca' => 'treballs',
											 'seo' => array('title' => '',
															 'desc' => '',
															 'words' => '',
											  )
											 ),
			'proyectos' 			=> array('controller' => 'menu', 'action' => 'image', 'page' => 8,
											 'es' => 'proyectos',
											 'ca' => 'projectes',
											 'seo' => array('title' => '',
															 'desc' => '',
															 'words' => '',
											  )
											 ),
			'contacto' 				=> array('controller' => 'menu', 'action' => 'contact', 'page' => 9,
											 'es' => 'contacto',
							 				 'ca' => 'contacte',
											 'seo' => array('title' => '',
															 'desc' => '',
															 'words' => '',
											  )
											 ),
			);
	
	/*
	 * @the registry
	 * @access private
	 */
	private $currentLanguage;
	
	/**
	 * @constructor
	 * @access public
	 * @return void
	 */
	function __construct($registry) {
		$this->registry = $registry;

		session_start();
		
		$lang = (empty($_GET['lang'])) ? '' : $_GET['lang'];

		if ($lang == '') {
			// Sense informació de la llengua, recuperar valor sessió o valor per defecte
			$lang = (isset($_SESSION["lang"])) ? $_SESSION["lang"] : self::LANG_DEFAULT;
		}
		$_SESSION["lang"]  = $lang;
		$this->changeLanguage($lang);
		
		$this->registry->currentLanguage = $lang;
	}

	private function changeLanguage($lang = self::LANG_DEFAULT) {
		// Set the text domain as "messages"
		$locale = self::$langs[$lang]['locale'];
		putenv('LANG=' . $locale);
		putenv('LANGUAGE='.$locale);
		bind_textdomain_codeset(self::LANG_DOMAIN, self::LANG_CODESET);
		
		setlocale(LC_ALL, $locale);
		//setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
		
		// Trick by-pass cache problems, must add link to locale
		// cd locale
		// ln -s . nocache
		bindtextdomain(self::LANG_DOMAIN, __LOCALE_DIR.'/nocache');
		 
		bindtextdomain(self::LANG_DOMAIN, __LOCALE_DIR);
		//bind_textdomain_codeset(self::LANG_DOMAIN, self::LANG_CODESET);
		
		textdomain(self::LANG_DOMAIN);
	}

	
	/**
	 *
	 * @renders alternate head links for each language but current 
	 *
	 * @param string $lang
	 *
	 * @return string
	 *
	 */
	static function getHtmlAlternateLinks($lang = self::LANG_DEFAULT) {
		/*
		<link rel="alternate" href="<?php echo __SITE_URL.'/ca/' ?>" hreflang="ca">
		*/
		$altLinks = "";
		foreach (self::$langs as $key => $alternatelang) {
			if ($key != $lang) 
				$altLinks .= '<link rel="alternate" href="'.__SITE_URL.'/'.$key.'/'.'" hreflang="'.$key.'">';
		}
		return $altLinks;
	}
	
	/**
	 *
	 * @get translated url for lang. If no translation is present, returns default 
	 *
	 * @param string $lang
	 *
	 * @return string
	 *
	 */
	static function getUrlTranslation($url, $lang = self::LANG_DEFAULT) {
		if (isset(self::$urls[$url][$lang])) return self::$urls[$url][$lang]; 
		return $url;
	}
	
	/**
	 *
	 * @get info from a translated url array('controller' => '..', 'action' => '..', 'page' => ..,
	 *
	 * @param string $lang
	 *
	 * @return array|null
	 *
	 */
	static function getUrlInfo($urlTranslation, $lang = self::LANG_DEFAULT) {
		foreach (self::$urls as $key => $urlInfo) {
			if ((isset($urlInfo[$lang]) && $urlInfo[$lang] == $urlTranslation) ||
				 !isset($urlInfo[$lang]) && $key == $urlTranslation) return $urlInfo;
		}
		return null;
	}
	
	
	static function getUrlInfoByPage($page = 0) {
		$keys = array_keys(self::$urls);
		
		if ($page < 0) $page = count($keys) - 1; // Últim
		if ($page >= count($keys))  $page = 0; // Primer
		
		$key = (isset($keys[$page]))?$keys[$page]:null;
		
		if ($key != null && isset(self::$urls[$key])) return self::$urls[$key];
		
		return null;	// null 	
	}
	
}

?>
