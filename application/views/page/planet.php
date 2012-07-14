
<section class="row">
	<h1 class="span10">Planet UK</h1>
	<section class="span3 sidebar">
		<h2>Disclaimer</h2>
		<p>Collected here are the most recent blog posts from all over the Mozilla UK Community. The content here is unfiltered and uncensored, and represents the views of individual community members. Individual posts are owned by their authors -- see original source for licensing information.</p>
	</section>
	<section class="span7">
		<?php foreach($articles as $post): ?>
		<article class="row">
			<aside class="span1">
				<span style="display:block;width:68px;height:68px;background:#ccc;">&nbsp;</span>
			</aside>
			<section class="span6">
				<h1><?php echo $post->title; ?></h1>
				<h2><?php echo $post->feed_title; ?></h2>
				<?php echo $post->content; ?>
				<p>Published <time datetime="<?php echo date('Y-m-d G:i', $post->datetime); ?>"><?php echo date('l, jS F', $post->datetime); ?> at <?php echo date('g:ia', $post->datetime); ?></time></p>
			</section>
		</article>
		<?php endforeach; ?>
	</section>
</section>