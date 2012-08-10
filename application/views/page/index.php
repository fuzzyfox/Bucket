<section id="home-news">
	<h3>News</h1>
	<ul>
		<?php for($i = 0; $i < 5; $i++): $article = $feeds[$i]; ?>
		<li>
			<h4><a href="<?php echo $article->link; ?>"><?php echo $article->title; ?></a></h4>
			<p><?php echo character_limiter(strip_tags($article->content), 300); ?></p>
		</li>
		<?php endfor; ?>
	</ul>
</section>

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

<section id="home-get-involved">
	<h3 class="dinohead">Get Involved</h3>
	<p class="clearfix">You dont't have to be a C++ guru (or even know what that means!) to get involved. You juest have to love the web. Find out more about how you can contribute and get in touch with use to start making the web.</p>
</section>
