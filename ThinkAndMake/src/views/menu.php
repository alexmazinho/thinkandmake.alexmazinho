<?php
	include_once( 'head.inc.php' );
?>
    <body id="menu-page">
    	<div id="container">
			<section id="header"><?php include_once( 'header.inc.php' );  ?></section>
    		<section id="main">
	   		<div class="section group">
				<div class="col span_1_of_3">
					<a class="inside-cell" href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation('un-concepto-diferente', $lang); ?>">
						<span class="cell-text"><?php echo _("un concepto");?></span>
						<span class="cell-text title-featured"><?php echo _("diferente");?></span>
					</a>
				</div>
				<div class="col span_1_of_3">
					<a class="inside-cell" href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation('que-somos', $lang); ?>">
						<span class="cell-text"><?php echo _("qué");?></span>
						<span class="cell-text title-featured"><?php echo _("somos");?></span>
					</a>
				</div>
				<div class="col span_1_of_3">
					<a class="inside-cell" href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation('quienes-somos', $lang); ?>">
						<span class="cell-text"><?php echo _("quiénes");?></span>
						<span class="cell-text title-featured"><?php echo _("somos");?></span>
					</a>
				</div>
				<div class="col span_1_of_3">
					<a class="inside-cell" href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation('nuestra-razon-de-ser', $lang); ?>">
						<span class="cell-text"><?php echo _("construir imagen");?></span>
						<span class="cell-text title-featured"><?php echo nl2br(_("nuestra razón de ser"));?></span>
					</a>
				</div>
				<div class="col span_1_of_3">
					<a class="inside-cell" href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation('marca-de-ciudad', $lang); ?>">
						<span class="cell-text title-featured"><?php echo _("trabajos");?></span>
					</a>
				</div>
				<div class="col span_1_of_3">
					<a class="inside-cell" href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation('contacto', $lang); ?>">
						<span class="cell-text title-featured"><?php echo _("contacto");?></span>
					</a>
				</div>
				</div>
			</section> 
			<section id="footer"><?php include_once( 'footer.inc.php' );  ?></section>
		</div>
        <script type="text/javascript">

        var div = $('.inside-cell');
        var width = div.width();

        //div.css('height', width);
        
        </script>
    </body>
</html>