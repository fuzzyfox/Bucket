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
		<article class="row">
			<section class="time span2">
				<h1><?php echo date('jS F', $event->start_date); ?></h1>
			</section>
			<section class="details span4">
				<h2><a href="<?php echo $event->event_url; ?>"><?php echo $event->event_name; ?></a></h2>
				<p><?php echo $event->event_description; ?></p>
			</section>
			<section class="span6">
				<?php 
					$tags = array();
					foreach ($event->tags as $tag){
						$tags[] = $tag->tag_name;
					}
					
					echo implode(', ', $tags);
				?>
			</section>
		</article>
		<?php endforeach; ?>
	</section>
</section>