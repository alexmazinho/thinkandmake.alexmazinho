<?php
	
	$seo['title'] = _("seo_404_title");
	$seo['desc'] = _("seo_404_desc");
	$seo['words'] = _("seo_404_words");
	
	include_once( 'head.inc.php' );
?>
    <body id="error-404">
    	<div id="container">
    		<section id="header"><?php include_once( 'header.inc.php' );  ?></section>
	   		<section id="main">
	   			<div class="section">
		   			<h1><?php echo _("Disculpa las molestias"); ?></h1>
					<h2><?php echo _("page not found"); ?></h2>
					<p><?php echo nl2br(sprintf(_("No se ha encontrado la página %s."), __SITE_URL.'/'.$route)); ?></p>
					<p><a href="<?php echo __SITE_URL; ?>" > <?php echo _("inicio >"); ?></a></p>
				</div>
			</section> 
			<section id="footer"></section>
		</div>
    </body>
</html>