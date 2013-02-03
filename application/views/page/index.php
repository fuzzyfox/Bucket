<?php $this->extends_view("theme/basic/generic"); ?>

<?php $this->start_block('styles'); ?>
<?php Assets::css(array('home.less')); ?>
<?php $this->end_block('styles'); ?>

<?php $this->start_block('javascripts'); ?>
<?php Assets::js(array('bedrock/mozilla-pager.js')); ?>
<script>Mozilla.Pager.AUTO_ROTATE_INTERVAL = 10000;</script>
<?php $this->end_block('javascripts'); ?>

<?php $this->start_block('firefox-download'); ?>
<section id="firefox-promo" class="billboard">
	<h3>Different by&nbsp;Design</h3>
	<a href="//mozilla.org/en-GB/firefox/" id="firefox-promo-link">
		<img src="//mozorg.cdn.mozilla.net/media/img/home/firefox.png" id="promo-logo" alt="Firefox">
		</a>
	<ul class="features">
		<li><small>Proudly <br> non-profit</small></li>
		<li><small>Innovating <br> for&nbsp;you</small></li>
		<li><small>Fast,&nbsp;flexible, <br> secure</small></li>
	</ul>

	<aside id="download" class="download-button download-button-small">
		<noscript>
			<div class="download download-dumb">
				<h4>Download Firefox — English (GB)</h4>
				<ul>
					<li><a href="https://download.mozilla.org/?product=firefox-18.0.1&amp;os=win&amp;lang=en-GB" class="button-white">Windows</a></li>
					<li><a href="https://download.mozilla.org/?product=firefox-18.0.1&amp;os=linux&amp;lang=en-GB" class="button-white">Linux</a></li>
					<li><a href="https://download.mozilla.org/?product=firefox-18.0.1&amp;os=osx&amp;lang=en-GB" class="button-white">Mac OS X</a></li>
					<li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">Android</a></li>
				</ul>
			</div>
		</noscript>

		<div class="unrecognized-download">
			<div class="download download-dumb">
				<h4>Download Firefox — English (GB)</h4>
				<ul>
					<li><a href="https://download.mozilla.org/?product=firefox-18.0.1&amp;os=win&amp;lang=en-GB" class="button-white">Windows</a></li>
					<li><a href="https://download.mozilla.org/?product=firefox-18.0.1&amp;os=linux&amp;lang=en-GB" class="button-white">Linux</a></li>
					<li><a href="https://download.mozilla.org/?product=firefox-18.0.1&amp;os=osx&amp;lang=en-GB" class="button-white">Mac OS X</a></li>
					<li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">Android</a></li>
				</ul>
			</div>
		</div>

		<ul class="download-list">
			<li class="os_windows">
				<a class="download-link download-firefox"
				href="//mozilla.org/en-GB/products/download.html?product=firefox-18.0.1&amp;os=win&amp;lang=en-GB"
				data-direct-link="https://download.mozilla.org/?product=firefox-18.0.1&amp;os=win&amp;lang=en-GB">
					<span class="download-content"><span class="download-title">Firefox</span>Free Download</span>
				</a>
			</li>
			<li class="os_linux">
				<a class="download-link download-firefox"
				href="//mozilla.org/en-GB/products/download.html?product=firefox-18.0.1&amp;os=linux&amp;lang=en-GB"
				data-direct-link="https://download.mozilla.org/?product=firefox-18.0.1&amp;os=linux&amp;lang=en-GB">
					<span class="download-content"><span class="download-title">Firefox</span>Free Download</span>
				</a>
			</li>
			<li class="os_osx">
				<a class="download-link download-firefox"
				href="//mozilla.org/en-GB/products/download.html?product=firefox-18.0.1&amp;os=osx&amp;lang=en-GB"
				data-direct-link="https://download.mozilla.org/?product=firefox-18.0.1&amp;os=osx&amp;lang=en-GB">
					<span class="download-content"><span class="download-title">Firefox</span>Free Download</span>
				</a>
			</li>
			<li class="os_android">
				<a class="download-link download-firefox"
				href="https://market.android.com/details?id=org.mozilla.firefox">
					<span class="download-content"><span class="download-title">Firefox</span>Free Download</span>
				</a>
			</li>
		</ul>

		<p class="unsupported-download">
			Your system doesn't meet the <a href="//mozilla.org/en-GB/en-GB/firefox/18.0.1/system-requirements/">requirements</a> to run Firefox.
		</p>

		<small class="download-other">
			<a href="//mozilla.org/en-GB/en-GB/firefox/all.html">Systems & Languages</a> |
			<a href="//mozilla.org/en-GB/en-GB/firefox/notes">What’s New</a> |
			<a href="//mozilla.org/en-GB/en-GB/legal/privacy/firefox.html">Privacy</a>
		</small>
	</aside>
</section>
<?php $this->end_block('firefox-download'); ?>

<?php $this->start_block('promo'); ?>
<section id="home-promo" class="pager pager-with-tabs pager-auto-rotate pager-no-history">

	<div class="pager-content">

		<div class="pager-page" id="promo-android">
			<script>// &lt;![CDATA[
			document.getElementById('promo-android').id = 'page-promo-android';
			// ]]&gt;
			</script>
			<a class="container" href="//www.mozilla.org/en-GB/firefox/fx/?WT.mc_id=moandroid&amp;WT.mc_ev=click#mobile">
				<img alt="Firefox for Android artwork" src="//www.mozilla.org/media/img/home/promo-android.jpg">
				<div class="content">
					<h3>Fast. Smart. Safe.</h3>
					<h4>Get the mobile browser that’s got your back.</h4>
					<p class="go">Get Firefox for Android&nbsp;»</p>
				</div>
			</a>
		</div>

		<div class="pager-page" id="promo-collusion">
			<script>// &lt;![CDATA[
			document.getElementById('promo-collusion').id = 'page-promo-collusion';
			// ]]&gt;
			</script>
			<a class="container" href="//www.mozilla.org/en-GB/collusion/">
				<img alt="Collusion artwork" src="//www.mozilla.org/media/img/home/promo-collusion.jpg">
				<div class="content">
					<h3>See who’s tracking your movements online.</h3>
					<p class="go">Add Collusion to Firefox&nbsp;»</p>
				</div>
			</a>
		</div>

		<div id="page-promo-maker-video" class="default-page pager-page">
			<script>// &lt;![CDATA[
			document.getElementById('promo-maker-video').id = 'page-promo-maker-video';
			// ]]&gt;</script>
			<a class="container" href="//www.mozilla.org/en-GB/webmaker/videos/">
				<img alt="" src="//www.mozilla.org/media/img/webmaker/carousel/instructors.jpg">
				<div class="content">
				<h3>Meet the Webmakers</h3>
				<p class="go"><strong>Let's teach the world the web.</strong> Meet some of the global community making it happen.</p>
				</div>
			</a>
			</div>

		<div class="pager-page" id="page-promo-popcorn">
			<script>// &lt;![CDATA[
			document.getElementById('promo-popcorn').id = 'page-promo-popcorn';
			// ]]&gt;</script>
			<a class="container" href="http://www.mozillapopcorn.org">
				<img alt="" src="//www.mozilla.org/media/img/webmaker/carousel/popcorn.png">
				<div class="content">
				<h3>Make video pop with Popcorn</h3>
				<p class="go">Popcorn is revolutionizing video on the web. It's free, open, and easy to use. Try it today. »</p>
				</div>
			</a>
			</div>
	</div>

	<ul class="pager-tabs">
		<li><a href="#p1">●</a></li>
		<li><a href="#p2">●</a></li>
		<li><a href="#p3">●</a></li>
		<li><a href="#p4">●</a></li>
		<li><a href="#p5">●</a></li>
	</ul>

</section>
<?php $this->end_block('promo'); ?>

<?php $this->start_block('content'); ?>
<section id="home-news">
	<h3>Planet</h1>
	<ul>
		<?php for($i = 0; $i < 3; $i++): $article = $feeds[$i]; ?>
		<li>
			<h4><a href="<?php echo $article->link; ?>"><?php echo $article->title; ?></a></h4>
			<p><?php echo character_limiter(strip_tags($article->content), 300); ?></p>
		</li>
		<?php endfor; ?>
	</ul>
</section>

<?php if($events): ?>
<section id="home-events">
	<h3>Events</h3>
	<?php foreach ($events as $event): ?>
	<section class="event">
		<p class="calendar event-time">
			<time datetime="<?php echo date('Y-m-d G:i', $event->start_date); ?>">
				<span class="calendar-month"><?php echo date('M', $event->start_date); ?></span>
				<span class="calendar-date"><?php echo date('d', $event->start_date); ?></span>
				<span class="calendar-year"><?php echo date('Y', $event->start_date); ?></span>
			</time>
		</p>
		<h3><a href="<?php echo $event->event_url; ?>"><?php echo $event->event_name; ?></a></h3>
		<p><?php echo $event->event_description; ?></p>
		<div class="event-tags">
			<?php
				$tags = array();
				foreach ($event->tags as $tag){
					$tags[] = '<a href="#">' . $tag->tag_name . '</a>';
				}

				echo implode(', ', $tags);
			?>
		</div>
	</section>
	<?php endforeach; ?>
</section>
<?php endif; ?>

<section id="home-get-involved">
	<h3 class="dinohead">Get Involved</h3>
	<p>You don’t have to be a C++ guru (or even know what that means!) to get involved. You just have to love the web.</p>
	<a href="https://www.mozilla.org/en-GB/contribute/" id="contribute">Find an opportunity »</a>
</section>

<?php $this->end_block('content'); ?>
