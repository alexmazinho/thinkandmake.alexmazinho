<?php
	include_once( 'head.inc.php' );
?>
    <body id="home-page">
    	<div id="container">
    		<section id="header"><?php include_once( 'header.inc.php' );  ?></section>
	   		<section id="main">
		   		<div class="section">
		   			<a href="<?php echo __SITE_URL.'/'.$route; ?>">
		   			<img width="500" alt="Logo think&make" title="<?php echo _($seo['title']); ?>" src="<?php echo __SITE_URL.'/img/thinkandmake_logo_intro.png'; ?>"></a>
				</div>
			</section> 
			<section id="footer"></section>
		</div>
		<script type="text/javascript">
			$("#home-page img").fadeTo("slow", 1);
        </script>
    </body>
</html>