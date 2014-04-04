<!DOCTYPE html>
<!--[if lte IE 8]><html lang="es" class="ie8lte"> <![endif]-->
<!--[if gt IE 8]> <!--> <html lang="<?php echo $lang;?>"> <!--<![endif]-->
<!-- BEGIN head -->
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="<?php echo _($seo['desc'])?>" name="description">
		<meta content="<?php echo _($seo['words'])?>" name="keywords">
		<meta content="7 days" name="revisit-after">
		<meta content="index, follow" name="robots">
		<meta content="Copyright © 2014 think&make" name="copyright">
		<meta content="version 1.0" name="version">
		<meta content="OnDisseny Web. Alex Macia" name="author">
		<meta content="<?php echo $lang;?>" http-equiv="Content-Language">
		<?php echo Language::getHtmlAlternateLinks($lang);	?>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/x-icon" href="<?php echo __SITE_URL.'/favicon.ico';?>" >
        
        <title><?php echo "think&make - "._($seo['title'])?></title>
		
		<!-- BEGIN styling -->
		<link media="all" href="<?php echo __SITE_URL.'/css/fonts.css'; ?>" type="text/css" rel="stylesheet" >
    	<link media="all" href="<?php echo __SITE_URL.'/css/style.css'; ?>" type="text/css" rel="stylesheet" >
    	<link media="all" href="<?php echo __SITE_URL.'/css/layout.css'; ?>" type="text/css" rel="stylesheet">
    	<link media="all" href="<?php echo __SITE_URL.'/css/responsive.css'; ?>" type="text/css" rel="stylesheet">
    	<noscript>
    	<style>
    		#home-page img { opacity:1; }
    	</style>
    	</noscript> 
		<!-- END styling -->
		
		<!-- BEGIN head scripting -->
		
		<script src="<?php echo __SITE_URL.'/js/jquery-1.11.0.min.js'; ?>" type="text/javascript"></script>
   		<!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<!-- 
   		<script type="text/javascript">
   		(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	  	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	  	 -->
		
		
        
        
	    <!-- 
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
		  ga('create', 'UA-37414954-X', 'promoquality.com');
		  ga('send', 'pageview');
	
		</script>
		 -->
		<!-- END head scripting -->
    </head>
<!-- END head -->



