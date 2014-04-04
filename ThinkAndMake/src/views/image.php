<?php
	include_once( 'head.inc.php' );
?>
    <body id="image-page">
    	<div id="container">
    		<section id="header"><?php include_once( 'header.inc.php' );  ?></section>
	   		<section id="main">
		   		<div class="section">
		   			<a class="navigation-prev" href="<?php echo __SITE_URL.'/'.$urlPrev; ?>">
		   				<img height="25" alt="<?php echo $urlPrevTitle; ?>" title="<?php echo $urlPrevTitle; ?>" src="<?php echo __SITE_URL.'/img/nav-left.png'; ?>"></a>
		   			<div class="outer-cell">
						<img alt="<?php echo $imageSeo; ?>" title="<?php echo $imageSeo; ?>" src="<?php echo __SITE_URL.'/img/'.$image; ?>">
					</div>
		   			<a class="navigation-next" href="<?php echo __SITE_URL.'/'.$urlNext; ?>">
		   				<img height="25" alt="<?php echo $urlNextTitle; ?>" title="<?php echo $urlNextTitle; ?>" src="<?php echo __SITE_URL.'/img/nav-right.png'; ?>"></a>
				</div>
			</section> 
			<section id="footer"></section>
		</div>
    </body>
</html>