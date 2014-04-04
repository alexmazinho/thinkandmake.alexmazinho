<?php 

?>

<div id="logo">
<?php if ($showLogo == true): ?>
<a class="home" href="<?php echo __SITE_URL; ?>"><img alt="Logo think&make" src="<?php echo __SITE_URL.'/img/thinkandmake_logo.png'; ?>"></a>
<?php endif; ?>
</div>
<div id="lang-switcher<?php if (isset($homePage) && $homePage == true) echo '-home'; ?>">
<div class="lang-menu lang-menu-left">
<a href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation($route, "es").'?lang=es'; ?>" <?php if ($lang == "es"): ?>class="current-lang"<?php endif;?> >Castellano</a>
<a href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation($route, "en").'?lang=en'; ?>" <?php if ($lang == "en"): ?>class="current-lang"<?php endif;?> >English</a>
</div>
<div class="lang-menu">
<a href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation($route, "fr").'?lang=fr'; ?>" <?php if ($lang == "fr"): ?>class="current-lang"<?php endif;?> >French</a>
<a href="<?php echo __SITE_URL.'/'.Language::getUrlTranslation($route, "ca").'?lang=ca'; ?>" <?php if ($lang == "ca"): ?>class="current-lang"<?php endif;?> >Català</a>
</div>
</div>

