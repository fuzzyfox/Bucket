<section class="row">
	<section class="span4">
		<h1>News</h1>
		<?php for($i = 0; $i < 10; $i++): $article = $feeds[$i]; ?>
		<article>
			<h1><?php echo $article->title; ?></h1>
			<?php echo character_limiter(strip_tags($article->content), 300); ?>
		</article>
		<?php endfor; ?>
	</section>
	
	<section class="span6">
		<h1>Events</h1>
		<?php foreach ($events as $event): ?>
		<pre><?php print_r($event); ?></pre>
		<?php endforeach; ?>
	</section>
</section>