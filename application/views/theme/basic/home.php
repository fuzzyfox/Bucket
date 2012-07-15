<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?php echo base_url('asset/css/mozilla.css'); ?>" />
		<link href="//www.mozilla.org/tabzilla/media/css/tabzilla.css" rel="stylesheet" />
		
		<title>mozilla.org.uk</title>
	</head>
	<body>
		<header class="container">
			<section class="row">
				<hgroup class="span4">
					<h1>Mozilla</h1>
					<h2>United Kingdom</h2>
				</hgroup>
				
				<nav class="span6">
					<a href="http://www.mozilla.org/" id="tabzilla">mozilla</a>
					<ul>
						<li class="active"><?php echo anchor('', 'Home'); ?></li>
						<li><?php echo anchor('about', 'About'); ?></li>
						<li><?php echo anchor('events', 'Events'); ?></li>
						<li><?php echo anchor('planet', 'Planet'); ?></li>
					</ul>
				</nav>
			</section>
		</header>
			
		<section class="container">
			<?php echo $page; ?>
		</section>
			
		<footer>
			<section class="container">
				<section class="row">
					<hgroup class="span2">
						<h1>Mozilla</h1>
						<h2>United Kingdom</h2>
					</hgroup>
					
					<section class="span4">
						<p>Portions of this content are &copy; by individual mozilla.org.uk contributors. Content available under <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons License</a>.</p>
					</section>
					
					<section class="span2">
						<nav>
							<ul>
								<li><?php echo anchor('contact', 'Contact Us'); ?></li>
								<li><?php echo anchor('privacy', 'Privacy Policy'); ?></li>
								<li><?php echo anchor('legal', 'Legal Notices'); ?></li>
								<li><a href="http://www.mozilla.org/en-US/about/mozilla-spaces/">Visit Us</a></li>
							</ul>
						</nav>
					</section>
					
					<section class="span2">
						<nav>
							<ul>
								<li><?php echo anchor('about', 'About'); ?></li>
								<li><?php echo anchor('events', 'Events'); ?></li>
								<li><?php echo anchor('planet', 'Planet'); ?></li>
							</ul>
						</nav>
					</section>
				</section>
			</section>
		</footer>
		<script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
	</body>
</html>