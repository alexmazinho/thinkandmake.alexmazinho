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
				
				$contentList[] = _("think & make nace con el objetivo de prestar una atención integral 
									al cliente.");
				$contentList[] = _("el compromiso es ofrecer soluciones efectivas, innovadoras y económicas.");
				$contentList[] = _("la creatividad y el desarrollo de nuevas soluciones siempre orientadas al
									resultado son nuestro compromiso principal.");
				$contentList[] = _("capacidad de trabajo intenso y enfoque integral de las soluciones.");
				$contentList[] = _("pensar y actuar, esa es la filosofía corporativa de think & make.");
				$contentList[] = _("think & make y los profesionales que la integran en diferentes ámbitos y 
									disciplinas acreditan una dilatada experiencia en el sector público y en 
									los campos de comunicación integral de gobiernos y ciudades.");
				
				break;
			case 1:  // que-somos
				$this->registry->template->contentTitlePart1 = _("qué");
				$this->registry->template->contentTitlePart2 = _("somos");
				
				$contentList[] = _("especialistas en añadir valor diferencial a instituciones y ciudades,
									a gobernantes y aspirantes a gobiernos. desarrollamos conceptos,
									definiciones de mercados, posicionamiento y estrategia operacional
									de la comunicación.");
				$contentList[] = _("el valor diferencial consiste en la proximidad, no sólo realizamos
									el análisis y el diagnóstico de la situación sino que colaboramos con el
									cliente en la fijación de los objetivos aportando beneficio, mejora y
									calidad. nuestra filosofía no es sólo opinar sino ejecutar y conseguir
									el resultado esperado.");
				$contentList[] = _("conseguimos incorporarnos en la organización respetando su cultura
									organizativa siendo palanca de cambio para aportar nuestra experiencia de
									éxito en ciudades e instituciones. conocemos las resistencias al cambio y
									los mecanismos de obtener resultados exitosos para la organización,
									la empresa o la institución.");
				$contentList[] = _("desarrollamos un modelo operacional, una estrategia, un relato y un
									plan de desarrollo validado y analizado en el tiempo.");
				$contentList[] = _("aportamos innovación en los procesos de comunicación pública.");
				break;
			case 2:  // quienes-somos
				$this->registry->template->contentTitlePart1 = _("quiénes");
				$this->registry->template->contentTitlePart2 = _("somos");
				
				$contentList[] = _("somos una compañía fundada por expertos en comunicación y marketing
									estratégico habiendo desarrollado multitud de campañas y planes para
									empresas privadas y organizaciones gubernamentales.");
				$contentList[] = _("contamos con un amplio equipo de consultores especializados en campos
									como la investigación de mercados, el diseño corporativo, las nuevas tecno-
									logías de la información, el marketing público y el electoral y la gestión de
									la reputación así como la construcción de imagen de marca de ciudad.");
				$contentList[] = _("<b>joaquim balsera</b> es socio fundador de la consultora de imagen pública
									think & make (<b>www.thinkandmake.es</b>). entre otros cargos profesionales ha
									dirigido los gabinetes de los alcaldes de ciudades como l’hospitalet y sobre
									todo barcelona, diseñando y consolidando la marca de la ciudad de
									barcelona con el alcalde joan clos.");
				$contentList[] = _("<b>fernando macia</b> es publicista socio fundador de la agencia de comunicación
									alicia (<b>www.agencialicia.com</b>) y exprofesor de comunicación de la
									universidad pompeu fabra de barcelona.");
				
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
				$contentList[] = _("tandem ddb, director general creativo. miembro del comité de dirección del grupo
									ddb. se convirtió en la 8a agencia más creativa del mundo. durante 5 años la agen-
									cia más creativa de españa. mas de 600 premios internacionales, entre ellos 22
									leones en cannes.");
				$contentList[] = _("<b>clientes:</b>
									<b>instituciones públicas</b>: fira barcelona, tmb, liceu barcelona,
									generalitat de catalunya, ajuntament de barcelona, ministerio de trabajo de espa-
									ña, ajuntament de l’hospitalet, ajuntament de santa coloma de gramanet, ajunta-
									ment de gavà.
									<b>campañas políticas</b>: generales psoe y municipales de españa,
									zp, pasqual maragall, joan clos, jose montilla, corbacho, núria marín, núria par-
									lon, joaquim balsera, jordi hereu, marta farrés, toni rebolleda, xavi paz...
									<b>empresas privadas</b>: nestlé, bbva, la caixa, estrella damm, audi, volkswagen, rcd es-
									panyol, grupo planeta, sorli discau, servihabitat, tve, la vanguardia, el periódico,
									font vella, sony, knorr, miko, jamaica, borges, l’aquarium, meliá, unno, smint, cirsa,
									rba, lanjaron, bosch, siemens, lizipaina...");
				$contentList[] = _("agencia alicia. socio fundador.");
				$contentList[] = _("director de arte. revistas de moda, periódicos, libros, etc.");
				$contentList[] = _("exprofesor creatividad en la upf.");
				
				break;
			case 5: // nuestra-razon-de-ser
				$this->registry->template->contentTitlePart1 = _("construir imagen");
				$this->registry->template->contentTitlePart2 = nl2br(_("\nnuestra razón de ser"));
				
				$contentList[] = _("la construcción de una imagen de marca de la ciudad consolida la valora-
									ción ciudadana y las acciones que sus gobiernos realizan. barcelona es
									ahora más que una ciudad: es una marca. la consolidación de la marca bar-
									celona generaliza el orgullo de pertenencia de los ciudadanos y consolida
									las acciones de los gobiernos así como dinamiza su economía.");
				$contentList[] = _("las gestión integral de las estrategias de comunicación, comunicación pú-
									blica y política, campañas electorales, imagen corporativa, organización de
									eventos, marketing directo, aplicación de las nuevas tecnologias, gestión e
									implementación de redes sociales, gestión de la reputación.");
				
				break;
		}
		$this->registry->template->contentList = $contentList;
		
		$this->registry->template->show('text');
	}
	
	public function textbox() {
		$this->registry->template->contentTitlePart1 = _("la construcción");
		$this->registry->template->contentTitlePart2 = _("\nde la marca de ciudad");
		
		$this->getNavigationArrows();
		
		$paragraphs[] = _("la marca es el municipio, su
							cultura, su historia, su forma
							de ser y entender su pasado, su
							presente y sobretodo su futu-
							ro. la marca tiene que reflejar");

		$paragraphs[] = _("la complicidad entre los ciuda-
							danos y la ciudad, sintetizando
							los valores básicos de la co-
							munidad y haciendo que todo el
							mundo se sienta orgulloso.");
		
		$paragraphs[] = _("la marca tiene que reflejar el
							dinamismo y el programa del
							gobierno garantizando el re-
							cuerdo y la implicación.");
		
		$boxesContents[] = array('title' => _("cultura"), 'paragraphs' => $paragraphs);
		
		unset($paragraphs);
		$paragraphs[] = _("la marca se materializa,
							se refleja y constituye en
							el entorno físico real del
							municipio, destacando sus
							atractivos, sus valores, sus
							proyectos.");
		
		$paragraphs[] = _("es la mejor presentación de
							la ciudad y por ello es impor-
							tante invertir en ella, gene-
							rar de ella una experiencia
							de éxito colectivo.");
		
		$boxesContents[] = array('title' => _("ciudad"), 'paragraphs' => $paragraphs);
		
		unset($paragraphs);
		$paragraphs[] = _("la marca no es un discurso
							largo, un conjunto de aspira-
							ciones bien intencionadas, una
							frase brillante o un eslogan
							fácil. la marca es el principal
							valor estratégico de la ciu-
							dad, de la región, del país. la
							marca es una idea útil, vital,
							un valor profundo, meditado y
							construído para la ciudad que
							tenemos y la que queremos te-
							ner. la marca tiene que estar
							presente en toda la comunica-
							ción y tiene que impregnar su
							filosofía. si no es notoria, no
							capta la atención, no genera
							ilusión ni convicción hacia el
							futuro, no es una buena marca.
							tiene que ser simple, directa,
							sugerente, vital y recordable.");
		
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
