<section class="row">
	<section class="feature span10">
		<img src="http://www.mozilla-hispano.org/wp-content/uploads/promo-android.jpg" alt="firefox mobile promo" />
	</section>
</section>

<section class="row">
	<section class="span4 sidebar">
		<h1>News</h1>
		<?php for($i = 0; $i < 5; $i++): $article = $feeds[$i]; ?>
		<article>
			<h2><a href="<?php echo $article->link; ?>"><?php echo $article->title; ?></a></h2>
			<?php echo character_limiter(strip_tags($article->content), 300); ?>
		</article>
		<?php endfor; ?>
	</section>
	
	<section class="span6">
		<h1>Events</h1>
		<?php foreach ($events as $event): ?>
		<article class="event">
			<section class="time">
				<h1><?php echo date('jS F', $event->start_date); ?></h1>
				<a href="<?php echo $event->event_url; ?>" class="button-blue">more</a>
			</section>
			<section class="details">
				<h2><a href="<?php echo $event->event_url; ?>"><?php echo $event->event_name; ?></a></h2>
				<p><?php echo $event->event_description; ?></p>
			</section>
			<section class="tags">
				<?php 
					$tags = array();
					foreach ($event->tags as $tag){
						$tags[] = '<a href="#">' . $tag->tag_name . '</a>';
					}
					
					echo implode(', ', $tags);
				?>
			</section>
		</article>
		<?php endforeach; ?>
	</section>
</section>

<hr>

<section class="row">
	<article class="span5">
		<h1 class="dinohead">Get Involved</h1>
		<p class="clearfix">You dont't have to be a C++ guru (or even know what that means!) to get involved. You juest have to love the web. Find out more about how you can contribute and get in touch with use to start making the web.</p>
	</article>
	<article class="span5">
		<h1 class="moz-heart">Join Us</h1>
		<p class="clearfix">Show us your support and help us build a better web with Firefox, Thunderbird, SeaMonkey and yourself! Sign up to our newsletter to receive the latest news and information.</p>
		<?php form_open(); ?>
			<input type="text" name="email" placeholder="your email here" required="true" /> <button type="submit" class="button-blue">Sign up</button>
		</form>
	</article>
</section>