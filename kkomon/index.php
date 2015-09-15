<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<?php
	$doc = JFactory::getDocument();
	$config = JFactory::getConfig();
	$menu = JFactory::getApplication()->getMenu()->getActive();
	
?>
<!DOCTYPE html>
<html lang='ru'>
	<head>
		<title><?php echo $doc->getTitle() . ' &mdash; ' . $config->get('sitename'); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="/templates/kkomon/img/logo.png" />
		<link rel="stylesheet" type="text/css" href="/templates/kkomon/css/kkomon.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<script src="/templates/kkomon/js/kkomon.js"></script>
	</head>
	<body>
		<div class="container">
		<?php if ($this->countModules('header')) { ?>
			<header><jdoc:include type="modules" name="header" /></header>
		<?php } ?>
		<?php if ($this->countModules('menu')) { ?>
			<nav class="menu-container"><jdoc:include type="modules" name="menu" /></nav>
		<?php } ?>
		<div class="content">
			<?php if ($this->countModules('slider')) { ?>
				<jdoc:include type="modules" name="slider" />
			<?php } else { ?>
				<div class="page"><jdoc:include type="component" /></div>
			<?php } ?>
			<?php if ($this->countModules('main-news') || $this->countModules('main-docs') || $this->countModules('main-vk')) { ?>
			<div class="main-data">
				<?php if ($this->countModules('main-news')) { ?>
					<div class="main-news"><jdoc:include type="modules" name="main-news" /></div>
				<?php } ?>
				<?php if ($this->countModules('main-docs')) { ?>
					<div class="main-docs"><jdoc:include type="modules" name="main-docs" /></div>
				<?php } ?>
				<?php if ($this->countModules('main-vk')) { ?>
					<div class="main-vk"><jdoc:include type="modules" name="main-vk" /></div>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if ($this->countModules('main-projects')) { ?>
				<div class="main-projects"><jdoc:include type="modules" name="main-projects" /></div>
			<?php } ?>
		</div>
		<?php if ($this->countModules('footer')) { ?>
			<footer><jdoc:include type="modules" name="footer" /></footer>
		<?php } ?>
		</div>
	</body>
</html>