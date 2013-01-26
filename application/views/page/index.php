<?php $this->extends_view("theme/basic/generic"); ?>

<?php $this->start_block('promo'); ?>
<section id="home-promo" class="pager pager-with-tabs pager-auto-rotate pager-no-history">

	<div class="pager-content">

		<div class="pager-page default-page" id="promo-firefox">
			<script>// &lt;![CDATA[
			document.getElementById('promo-firefox').id = 'page-promo-firefox';
			// ]]&gt;
			</script>
			<a class="container" href="//www.mozilla.org/en-US/firefox/new/">
				<img alt="Firefox for Desktop artwork" src="<?php echo base_url('asset/img/promo-beta.jpg'); ?>">
				<div>
					<h3>Different by design.</h3>
					<h4>Proudly non-profit.<br> Innovating for you.<br> Fast, flexible, secure.</h4>
					<p>Get Firefox »</p>
				</div>
			</a>
		</div>

		<div class="pager-page" id="promo-android">
			<script>// &lt;![CDATA[
			document.getElementById('promo-android').id = 'page-promo-android';
			// ]]&gt;
			</script>
			<a class="container" href="//www.mozilla.org/en-US/firefox/fx/?WT.mc_id=moandroid&amp;WT.mc_ev=click#mobile">
				<img alt="Firefox for Android artwork" src="//www.mozilla.org/media/img/home/promo-android.jpg">
				<div>
					<h3>Fast. Smart. Safe.</h3>
					<h4>Get the mobile browser that’s got your back.</h4>
					<p>Get Firefox for Android&nbsp;»</p>
				</div>
			</a>
		</div>

		<div class="pager-page" id="promo-collusion">
			<script>// &lt;![CDATA[
			document.getElementById('promo-collusion').id = 'page-promo-collusion';
			// ]]&gt;
			</script>
			<a class="container" href="//www.mozilla.org/en-US/collusion/">
				<img alt="Collusion artwork" src="//www.mozilla.org/media/img/home/promo-collusion.jpg">
				<div>
					<h3>See who’s tracking your movements online.</h3>
					<p>Add Collusion to Firefox&nbsp;»</p>
				</div>
			</a>
		</div>

		<div id="page-promo-maker-video" class="default-page pager-page">
			<script>// &lt;![CDATA[
			document.getElementById('promo-maker-video').id = 'page-promo-maker-video';
			// ]]&gt;</script>
			<a class="container" href="//www.mozilla.org/en-US/webmaker/videos/">
			  <img alt="" src="//www.mozilla.org/media/img/webmaker/carousel/instructors.jpg">
			  <div>
				<h3>Meet the Webmakers</h3>
				<p><strong>Let's teach the world the web.</strong> Meet some of the global community making it happen.</p>
			  </div>
			</a>
		  </div>

		<div class="pager-page" id="page-promo-popcorn">
			<script>// &lt;![CDATA[
			document.getElementById('promo-popcorn').id = 'page-promo-popcorn';
			// ]]&gt;</script>
			<a class="container" href="http://www.mozillapopcorn.org">
			  <img alt="" src="//www.mozilla.org/media/img/webmaker/carousel/popcorn.png">
			  <div>
				<h3>Make video pop with Popcorn</h3>
				<p>Popcorn is revolutionizing video on the web. It's free, open, and easy to use. Try it today. »</p>
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
	<a href="https://www.mozilla.org/en-US/contribute/" id="contribute">Find an opportunity »</a>
</section>

<?php $this->end_block('content'); ?>
