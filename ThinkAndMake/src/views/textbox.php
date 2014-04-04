<?php
	include_once( 'head.inc.php' );
?>
    <body id="textbox-page">
    	<div id="container">
    		<section id="header"><?php include_once( 'header.inc.php' );  ?></section>
	   		<section id="main">
		   		<div class="section">
		   			<a class="navigation-prev" href="<?php echo __SITE_URL.'/'.$urlPrev; ?>">
		   				<img height="25" alt="<?php echo $urlPrevTitle; ?>" title="<?php echo $urlPrevTitle; ?>" src="<?php echo __SITE_URL.'/img/nav-left.png'; ?>"></a>
		   			<div class="outer-cell"><div class="text-cell text-cell-box">
						<h1 class="text-title"><?php echo $contentTitlePart1." ";?><span class="title-featured"><?php echo $contentTitlePart2; ?></span></h1></div>
						<div id="text-boxes">
							<?php foreach ($boxContent as $box) : ?>
								<div class="box-col">	  
									<h2 class="box-title"><?php echo $box['title']; ?><img title="<?php echo $box['title']; ?>" src="<?php echo __SITE_URL.'/img/arrow-right.png'; ?>"></h2>
									<div class="box-col-textbox">
									<?php foreach ($box['paragraphs'] as $pg) : ?>
										<p><?php echo $pg; ?></p>
									<?php endforeach;?>
									</div>
								</div>	
							<?php endforeach;?>
						</div>
					</div>
		   			<a class="navigation-next" href="<?php echo __SITE_URL.'/'.$urlNext; ?>">
		   				<img height="25" alt="<?php echo $urlNextTitle; ?>" title="<?php echo $urlNextTitle; ?>" src="<?php echo __SITE_URL.'/img/nav-right.png'; ?>"></a>
				</div>
			</section> 
			<section id="footer"></section>
		</div>
    </body>
</html>