<?php

Class menuController Extends baseController {

	public function index() {
		$this->registry->template->show('menu');
	}

	public function text() {
		/* Gestió dels textes en funció de la pàgina
		 * */
		$this->registry->template->contentTitlePart1 = "";
		$this->registry->template->contentTitlePart2 = "";
		
		$this->getNavigationArrows();
		
		$contentList = array();
		
		switch ($this->registry->page) {
			case 0:  // un-concepto-diferente
				$this->registry->template->contentTitlePart1 = _("un concepto");
				$this->registry->template->contentTitlePart2 = _("diferente");
				
				$contentList[] = _("think & make nace con el objetivo de prestar una atención integral\nal cliente.");
				$contentList[] = _("el compromiso es ofrecer soluciones efectivas, innovadoras y económicas.");
				$contentList[] = _("la creatividad y el desarrollo de nuevas soluciones siempre orientadas al\nresultado son nuestro compromiso principal.");
				$contentList[] = _("capacidad de trabajo intenso y enfoque integral de las soluciones.");
				$contentList[] = _("pensar y actuar, esa es la filosofía corporativa de think & make.");
				$contentList[] = _("think & make y los profesionales que la integran en diferentes ámbitos y\n".
									"disciplinas acreditan una dilatada experiencia en el sector público y en\nlos campos de comunicación integral de gobiernos y ciudades.");
				
				break;
			case 1:  // que-somos
				$this->registry->template->contentTitlePart1 = _("qué");
				$this->registry->template->contentTitlePart2 = _("somos");
				
				$contentList[] = _("especialistas en añadir valor diferencial a instituciones y ciudades,\n".
									"a gobernantes y aspirantes a gobiernos. desarrollamos conceptos,\n".
									"definiciones de mercados, posicionamiento y estrategia operacional\n".
									"de la comunicación.");
				$contentList[] = _("el valor diferencial consiste en la proximidad, no sólo realizamos\n".
									"el análisis y el diagnóstico de la situación sino que colaboramos con el\n".
									"cliente en la fijación de los objetivos aportando beneficio, mejora y\n".
									"calidad. nuestra filosofía no es sólo opinar sino ejecutar y conseguir\n".
									"el resultado esperado.");
				$contentList[] = _("conseguimos incorporarnos en la organización respetando su cultura\n".
									"organizativa siendo palanca de cambio para aportar nuestra experiencia de\n".
									"éxito en ciudades e instituciones. conocemos las resistencias al cambio y\n".
									"los mecanismos de obtener resultados exitosos para la organización,\n".
									"la empresa o la institución.");
				$contentList[] = _("desarrollamos un modelo operacional, una estrategia, un relato y un\n".
									"plan de desarrollo validado y analizado en el tiempo.");
				$contentList[] = _("aportamos innovación en los procesos de comunicación pública.");
				break;
			case 2:  // quienes-somos
				$this->registry->template->contentTitlePart1 = _("quiénes");
				$this->registry->template->contentTitlePart2 = _("somos");
				
				$contentList[] = _("somos una compañía fundada por expertos en comunicación y marketing\n".
									"estratégico habiendo desarrollado multitud de campañas y planes para\n".
									"empresas privadas y organizaciones gubernamentales.");
				$contentList[] = _("contamos con un amplio equipo de consultores especializados en campos\n".
									"como la investigación de mercados, el diseño corporativo, las nuevas tecnologías\n".
									"de la información, el marketing público y el electoral y la gestión de\n".
									"la reputación así como la construcción de imagen de marca de ciudad.");
				$contentList[] = _("<b>joaquim balsera</b> es socio fundador de la consultora de imagen pública\n".
									"think & make (<b>www.thinkandmake.es</b>). entre otros cargos profesionales ha\n".
									"dirigido los gabinetes de los alcaldes de ciudades como l’hospitalet y sobre\n".
									"todo barcelona, diseñando y consolidando la marca de la ciudad de\n".
									"barcelona con el alcalde joan clos.");
				$contentList[] = _("<b>fernando macia</b> es publicista socio fundador de la agencia de comunicación\n".
									"alicia (<b>www.agencialicia.com</b>) y exprofesor de comunicación de la\n".
									"universidad pompeu fabra de barcelona.");
				
				break;
			case 3:  // joaquim-balsera
				$this->registry->template->contentTitlePart1 = _("joaquim");
				$this->registry->template->contentTitlePart2 = _("balsera");
				
				$contentList[] = _("ub-uoc");
				$contentList[] = _("estudios de derecho");
				$contentList[] = _("esade business school");
				$contentList[] = _("diplomatura función gerencial, administración pública");
				$contentList[] = _("dgm, dirección general de marketing");
				$contentList[] = _("jefe de gabinete de la alcaldía ajuntament de gavà (barcelona)");
				$contentList[] = _("jefe de gabinete de la alcaldía ajuntament de l’hospitalet (barcelona)");
				$contentList[] = _("jefe de gabinete de la vicepresidencia primera diputació de barcelona");
				$contentList[] = _("jefe de gabinete de la alcaldía ajuntament de barcelona");
				$contentList[] = _("alcalde ajuntament de gavà");
				$contentList[] = _("president consell comarcal del baix llobregat");
				$contentList[] = _("socio fundador de think and make");
				$contentList[] = _("socio fundador de smart institutional solutions");
				
				break;
			case 4:  // frenando-macia
				$this->registry->template->contentTitlePart1 = _("fernando");
				$this->registry->template->contentTitlePart2 = _("macia");
				
				$contentList[] = _("publicista");
				$contentList[] = _("tandem ddb, director general creativo. miembro del comité de dirección del grupo\n".
									"ddb. se convirtió en la 8a agencia más creativa del mundo. durante 5 años la agencia\n".
									"más creativa de españa. mas de 600 premios internacionales, entre ellos 22\n".
									"leones en cannes.");
				$contentList[] = _("<b>clientes:</b>\n".
									"<b>instituciones públicas</b>: fira barcelona, tmb, liceu barcelona,\n".
									"generalitat de catalunya, ajuntament de barcelona, ministerio de trabajo de españa,\n".
									"ajuntament de l’hospitalet, ajuntament de santa coloma de gramanet, ajuntament\n".
									"de gavà.\n".
									"<b>campañas políticas</b>: generales psoe y municipales de españa,\n".
									"zp, pasqual maragall, joan clos, jose montilla, corbacho, núria marín, núria parlon,\n".
									"joaquim balsera, jordi hereu, marta farrés, toni rebolleda, xavi paz...\n".
									"<b>empresas privadas</b>: nestlé, bbva, la caixa, estrella damm, audi, volkswagen,\n".
									"rcd espanyol, grupo planeta, sorli discau, servihabitat, tve, la vanguardia, el periódico,\n".
									"font vella, sony, knorr, miko, jamaica, borges, l’aquarium, meliá, unno, smint, cirsa,\n".
									"rba, lanjaron, bosch, siemens, lizipaina...");
				$contentList[] = _("agencia alicia. socio fundador.");
				$contentList[] = _("director de arte. revistas de moda, periódicos, libros, etc.");
				$contentList[] = _("exprofesor creatividad en la upf.");
				
				break;
			case 5: // nuestra-razon-de-ser
				$this->registry->template->contentTitlePart1 = _("construir imagen");
				$this->registry->template->contentTitlePart2 = nl2br(_("\nnuestra razón de ser"));
				
				$contentList[] = _("la construcción de una imagen de marca de la ciudad consolida la valoración\n".
									"ciudadana y las acciones que sus gobiernos realizan. barcelona es\n".
									"ahora más que una ciudad: es una marca. la consolidación de la marca barcelona\n".
									"generaliza el orgullo de pertenencia de los ciudadanos y consolida\n".
									"las acciones de los gobiernos así como dinamiza su economía.");
				$contentList[] = _("las gestión integral de las estrategias de comunicación, comunicación pública\n".
									"y política, campañas electorales, imagen corporativa, organización de\n".
									"eventos, marketing directo, aplicación de las nuevas tecnologias, gestión e\n".
									"implementación de redes sociales, gestión de la reputación.");
				
				break;
		}
		$this->registry->template->contentList = $contentList;
		
		$this->registry->template->show('text');
	}
	
	public function textbox() {
		$this->registry->template->contentTitlePart1 = _("la construcción");
		$this->registry->template->contentTitlePart2 = _("\nde la marca de ciudad");
		
		$this->getNavigationArrows();
		
		$paragraphs[] = _("la marca es el municipio, su\n".
							"cultura, su historia, su forma\n".
							"de ser y entender su pasado, su\n".
							"presente y sobretodo su futuro.\n".
							"la marca tiene que reflejar");

		$paragraphs[] = _("la complicidad entre los ciudadanos\n".
							"y la ciudad, sintetizando\n".
							"los valores básicos de la\n".
							"comunidad y haciendo que todo el\n".
							"mundo se sienta orgulloso.");
		
		$paragraphs[] = _("la marca tiene que reflejar el\n".
							"dinamismo y el programa del\n".
							"gobierno garantizando el\n".
							"recuerdo y la implicación.");
		
		$boxesContents[] = array('title' => _("cultura"), 'paragraphs' => $paragraphs);
		
		unset($paragraphs);
		$paragraphs[] = _("la marca se materializa,\n".
							"se refleja y constituye en\n".
							"el entorno físico real del\n".
							"municipio, destacando sus\n".
							"atractivos, sus valores, sus\n".
							"proyectos.");
		
		$paragraphs[] = _("es la mejor presentación de\n".
							"la ciudad y por ello es\n".
							"importante invertir en ella,\n".
							"generar de ella una experiencia\n".
							"de éxito colectivo.");
		
		$boxesContents[] = array('title' => _("ciudad"), 'paragraphs' => $paragraphs);
		
		unset($paragraphs);
		$paragraphs[] = _("la marca no es un discurso largo,\n".
							"un conjunto de aspiraciones\n".
							"bien intencionadas, una\n".
							"frase brillante o un eslogan\n".
							"fácil. la marca es el principal\n".
							"valor estratégico de la ciudad,\n".
							"de la región, del país. la\n".
							"marca es una idea útil, vital,\n".
							"un valor profundo, meditado y\n".
							"construído para la ciudad que\n".
							"tenemos y la que queremos tener.\n".
							"la marca tiene que estar\n".
							"presente en toda la comunicación\n".
							"y tiene que impregnar su\n".
							"filosofía. si no es notoria, no\n".
							"capta la atención, no genera\n".
							"ilusión ni convicción hacia el\n".
							"futuro, no es una buena marca.\n".
							"tiene que ser simple, directa,\n".
							"sugerente, vital y recordable.");
		
		$boxesContents[] = array('title' => _("valor"), 'paragraphs' => $paragraphs);
		
		$this->registry->template->boxContent = $boxesContents;
		
		$this->registry->template->show('textbox');
		
	}

	public function image() {
		
		$this->getNavigationArrows();
		
		switch ($this->registry->page) {
			case 7:
				$this->registry->template->image = 'thinkandmake-trabajos.png';
				$this->registry->template->imageSeo = _('image-alt-trabajos');
				break;
			case 8:
				$this->registry->template->image = 'thinkandmake-proyectos.png';
				$this->registry->template->imageSeo = _('image-alt-proyectos');
				break;
		}
		
		
		$this->registry->template->show('image');
	}

	public function contact() {
		
		$this->getNavigationArrows();
		
		$this->registry->template->show('contact');
	}
	
	
	private function getNavigationArrows() {
		$urlInfo = Language::getUrlInfoByPage($this->registry->page-1);
		if (isset($urlInfo[$this->registry->currentLanguage])) $this->registry->template->urlPrev = $urlInfo[$this->registry->currentLanguage];
		if (isset($urlInfo['seo']['title'])) $this->registry->template->urlPrevTitle = _($urlInfo['seo']['title']);
			
		$urlInfo = Language::getUrlInfoByPage($this->registry->page+1);
		if (isset($urlInfo[$this->registry->currentLanguage])) $this->registry->template->urlNext = $urlInfo[$this->registry->currentLanguage];
		if (isset($urlInfo['seo']['title'])) $this->registry->template->urlNextTitle = _($urlInfo['seo']['title']);
	}
}

?>
