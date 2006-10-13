<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="<?php $oti = $ctl->getOutputTypeInfo(); echo isset($oti['parameters']['Content-Type']) ? $oti['parameters']['Content-Type'] : 'text/html; charset=utf-8'; ?>"/>
		<title><?php echo $tm->_('Default Agavi Module', 'default.layout'); ?></title>
		<base href="<?php echo $r->getBaseHref(); ?>" />
		<style type="text/css">
		body {
			background-color: #FFFFFF;
			color:            #000000;
			font-family:      arial, helvetica, sans-serif;
			font-size:        76%;
			font-style:       normal;
			font-weight:      normal;
			margin:           0;
		}

		#content {
			margin-left:  200px;
			margin-right: 15px;
		}

		h1 {
			display:					block;
			background-color: #EAEAEA;
			border-bottom:    solid 1px #505050;
			color:            #505050;
			font-family:      arial, helvetica, sans-serif;
			font-size:        2.0em;
			letter-spacing:   0.03em;
			margin:           0 0 15px 0;
			padding:          10px 0 10px 15px;
		}

		#menu {
			border:           solid 1px #505050;
			float:            left;
			margin-left:      15px;
			width:            160px;
		}

		#menu a {
			background-color: #EAEAEA;
			color:            #000000;
			display:          block;
			padding:          5px 0 5px 10px;
			text-decoration:  none;
		}

		#menu a:hover {
			background-color: #505050;
			color:            #FFFFFF;
		}

		#menu h3 {
			background-color: #750000;
			color:            #FFFFFF;
			font-size:        1.3em;
			margin:           0;
			padding:          5px 0 5px 10px;
		}

		#menu li {
			background-color: #909090;
			height:           1%;
			list-style-type:  none;
			margin:           0;
			padding:          0;
		}

		#menu ul {
			margin:  0;
			padding: 0;
		}

		#title {
			border-bottom:  solid 1px #373737;
			color:          #373737;
			font-size:      2.0em;
			letter-spacing: 0.03em;
			margin-bottom:  15px;
		}

		/* IE Windows hack */

		* html #content {
			margin-left: 197px;
		}

		* html #menu {
			margin-left: 8px;
		}

		* html #menu li {
			margin-bottom: -5px;
		}
		
		input.error, textarea.error {
			background-color: #FFE0E0;
		}
		
		label.error {
			color: #D00;
		}
		
		p.error {
			padding:          0.5em;
			border:           2px solid #D66;
			background-color: #FFF0F0;
			color:            #D00;
		}
		
		p.runin {
			float:   right;
			margin:  0 1em 1em 1em;
			padding: 0.3em 0.5em;
			border:  1px solid #DDD;
			background-color: #EEE;
		}

		</style>
	</head>
	<body>
		<h1><?php echo $tm->_('Agavi Sample Application', 'default.layout'); ?></h1>
<?php
$languages = array();
foreach($tm->getAvailableLocales() as $locale) {
	$languages[$locale['identifierData']['language']] = $locale['parameters']['description'];
}

$currentLanguage = $tm->getCurrentLocale()->getLocaleLanguage();

$otherLanguages = array_diff_key($languages, array($currentLanguage => null));

?>
		<p class="runin"><?php echo $tm->_('Current language:', 'default.layout'); ?> <a href="<?php echo $r->gen(null, array('language' => $currentLanguage)); ?>" hreflang="<?php echo $currentLanguage; ?>"><?php echo $languages[$currentLanguage]; ?></a>. <?php echo $tm->__('Alternative language:', 'Alternative languages:', count($otherLanguages), 'default.layout'); ?> <?php $first = true; foreach($otherLanguages as $key => $value): if(!$first) echo ', '; ?><a href="<?php echo $r->gen(null, array('language' => $key)); ?>" hreflang="<?php echo $key; ?>"><?php echo $value; ?></a><?php $first = false; endforeach; ?></p>
<?php if($usr->isAuthenticated()): ?>
<p class="runin"><?php echo $tm->_('You are logged in.', 'default.layout'); ?> <a href="<?php echo $r->gen('logout'); ?>"><?php echo $tm->_('Log Out', 'default.layout'); ?></a></p>
<?php endif; ?>
		<div id="menu">
			<h3><?php echo $tm->_('Menu', 'default.layout'); ?></h3>
			<ul>
				<li><a href="<?php echo $r->gen('index'); ?>"><?php echo $tm->_('Home', 'default.menu'); ?></a></li>
<?php if(!$usr->isAuthenticated()): ?>
				<li><a href="<?php echo $r->gen('login'); ?>"><?php echo $tm->_('Login', 'default.menu'); ?></a></li>
<?php endif; ?>
				<li><a href="<?php echo $r->gen('secure'); ?>"><?php echo $tm->_('A Secure Action', 'default.menu'); ?></a></li>
				<li><a href="<?php echo $r->gen('secure2'); ?>"><?php echo $tm->_('Another Secure Action', 'default.menu'); ?></a></li>
				<li><a href="<?php echo $r->gen('asdjashdasd'); ?>"><?php echo $tm->_('Call invalid URL', 'default.menu'); ?></a></li>
				<li><a href="<?php echo $r->gen('disabled'); ?>"><?php echo $tm->_('Try Disabled Module', 'default.menu'); ?></a></li>
				<li><a href="<?php echo $r->gen('search_engine_spam', array('name' => $products[array_rand($products = array('nonsense', 'chainsaws', 'brains', 'viagra', 'mad coding skills'))], 'id' => 4815162342)); ?>"><?php echo $tm->_('Search Engine Spam', 'default.menu'); ?></a></li>
			</ul>
		</div>
		<div id="content">
			<h2><?php echo $template['title']; ?></h2>
<?php if($req->hasErrors()): foreach($req->getErrorMessages() as $error): ?>
			<p class="error"><?php echo $error['message']; ?></p>
<?php endforeach; endif; ?>
<?php echo $template['content']; ?> 
		</div>
	</body>
</html>
