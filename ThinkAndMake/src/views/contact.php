<?php
	include_once( 'head.inc.php' );
?>
    <body id="contact-page">
    	<div id="container">
    		<section id="header"><?php include_once( 'header.inc.php' );  ?></section>
	   		<section id="main">
		   		<div class="section">
		   			<a class="navigation-prev" href="<?php echo __SITE_URL.'/'.$urlPrev; ?>">
		   				<img height="25" alt="<?php echo $urlPrevTitle; ?>" title="<?php echo $urlPrevTitle; ?>" src="<?php echo __SITE_URL.'/img/nav-left.png'; ?>"></a>
		   			<div class="outer-cell"><div class="text-cell text-cell-contact">
						<h1 class="text-contact-title">think<img alt="&" src="<?php echo __SITE_URL.'/img/and-logo-thinkandmake.png'; ?>"><span class="title-featured">make</span></h1>
						<h2 class="text-contact-mail"><a href="mailto:jbalsera@thinkandmake.es">jbalsera@thinkandmake.es</a></h2>
					</div></div>
		   			<a class="navigation-next" href="<?php echo __SITE_URL.'/'.$urlNext; ?>">
		   				<img height="25" alt="<?php echo $urlNextTitle; ?>" title="<?php echo $urlNextTitle; ?>" src="<?php echo __SITE_URL.'/img/nav-right.png'; ?>"></a>
				</div>
			</section> 
			<section id="footer"></section>
		</div>
    </body>
</html>