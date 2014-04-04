<?php
	include_once( 'head.inc.php' );
?>
    <body id="text-page">
    	<div id="container">
    		<section id="header"><?php include_once( 'header.inc.php' );  ?></section>
	   		<section id="main">
		   		<div class="section">
		   			<a class="navigation-prev" href="<?php echo __SITE_URL.'/'.$urlPrev; ?>">
		   				<img height="25" alt="<?php echo $urlPrevTitle; ?>" title="<?php echo $urlPrevTitle; ?>" src="<?php echo __SITE_URL.'/img/nav-left.png'; ?>"></a>
		   			<div class="outer-cell"><div class="text-cell">
						<h1 class="text-title"><?php echo $contentTitlePart1." ";?><span class="title-featured"><?php echo $contentTitlePart2; ?></span></h1>
						<ul class="text-content">
						<?php foreach ($contentList as $item) : ?>
							<li><?php echo nl2br($item); ?></li>
						<?php endforeach;?>
						</ul>
					</div></div>
		   			<a class="navigation-next" href="<?php echo __SITE_URL.'/'.$urlNext; ?>">
		   				<img height="25" alt="<?php echo $urlNextTitle; ?>" title="<?php echo $urlNextTitle; ?>" src="<?php echo __SITE_URL.'/img/nav-right.png'; ?>"></a>
				</div>
			</section> 
			<section id="footer"></section>
		</div>
    </body>
</html>