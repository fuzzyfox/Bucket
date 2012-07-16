<section class="row">
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