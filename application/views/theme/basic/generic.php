<!doctype html>
<html class="windows no-js" lang="en-GB" dir="ltr">
	<head>

		<!--[if lte IE 8]>
			<?php Assets::js_group('ie', array('html5shiv-3.6.1.js')); ?>
		<![endif]-->

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="//www.mozilla.org/tabzilla/media/css/tabzilla.css" rel="stylesheet">

		<?php Assets::css_group('global', array('style.less')); ?>
		<?php $this->start_block('styles'); ?>
		<?php $this->end_block('styles'); ?>

		<title>Mozilla United Kingdom Community</title>
	</head>
	<body id="home" class="html-ltr sky">
		<div id="outer-wrapper">
			<div id="wrapper">

				<header id="masthead">
					<a href="http://www.mozilla.org/" id="tabzilla">Mozilla</a>

					<nav id="nav-main" role="menubar">
						<span class="toggle" role="button" aria-controls="nav-main-menu" tabindex="0">Menu</span>
						<ul role="menu" id="nav-main-menu">
							<li role="menuitem" class="first"><?php echo anchor('', 'Home'); ?></li>
							<li role="menuitem"><?php echo anchor('about', 'About'); ?></li>
							<li role="menuitem"><?php echo anchor('events', 'Events'); ?></li>
							<li role="menuitem" class="last"><?php echo anchor('planet', 'Planet'); ?></li>
						</ul>
					</nav>

					<h2><a href="<?php echo site_url(); ?>"><img id="header-logo" src="<?php echo base_url('media/img/logo-h.png'); ?>" alt="Mozilla UK"></a></h2>

					<?php $this->start_block('title'); ?>
					<?php $this->end_block('title'); ?>

				</header>

				<?php $this->start_block('firefox-download'); ?>
				<?php $this->end_block('firefox-download'); ?>

				<?php $this->start_block('promo'); ?>
				<?php $this->end_block('promo'); ?>

				<div id="main-content">
					<?php $this->start_block('content'); ?>
					<?php $this->end_block('content'); ?>
				</div>

			</div>

			<footer id="colophon">
				<div class="row">

					<div class="footer-logo">
						<a href="<?php echo site_url(); ?>"><img src="<?php echo base_url('media/img/mozilla-uk-wordmark-red.png'); ?>" alt="mozilla"></a>
					</div>

					<div class="footer-license">
						<p>Portions of this content are &copy; by individual mozilla.org.uk contributors. Content available under <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons License</a>.</p>
					</div>
					<ul class="footer-nav">
						<!-- <li><?php echo anchor('contact', 'Contact Us'); ?></li> -->
						<!-- <li><?php echo anchor('privacy', 'Privacy Policy'); ?></li> -->
						<!-- <li><?php echo anchor('legal', 'Legal Notices'); ?></li> -->
						<li><a href="http://www.mozilla.org/en-US/about/mozilla-spaces/">Visit Us</a></li>
					</ul>

					<ul class="footer-nav">
						<li><?php echo anchor('about', 'About'); ?></li>
						<li><?php echo anchor('events', 'Events'); ?></li>
						<li><?php echo anchor('planet', 'Planet'); ?></li>
					</ul>

				</div>
			</footer>
		</div>
		<!-- Piwik -->
		<script type="text/javascript">
		var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.mozilla.org.uk/" : "http://stats.mozilla.org.uk/");
		document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
		</script><script type="text/javascript">
		try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
		} catch( err ) {}
		</script><noscript><p><img src="http://stats.mozilla.org.uk/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
		<!-- End Piwik Tracking Code -->
		<?php Assets::cdn(array('jquery'));?>
		<script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
		<?php Assets::js_group('global', array('bedrock/global.js', 'bedrock/nav-main-resp.js', 'bedrock/site.js')); ?>
		<?php $this->start_block('javascripts'); ?>
		<?php $this->end_block('javascripts'); ?>
	</body>
</html>
