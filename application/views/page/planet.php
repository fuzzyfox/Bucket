
<section class="row">
	<h1 class="span10">Planet UK</h1>
	<section class="span3 sidebar">
		<h2>Disclaimer</h2>
		<p>Collected here are the most recent blog posts from all over the Mozilla UK Community. The content here is unfiltered and uncensored, and represents the views of individual community members. Individual posts are owned by their authors -- see original source for licensing information.</p>
		
		<h2>Feeds</h2>
		<ul>
			<?php foreach ($feeds as $feed): ?>
			<li><a href="<?php echo $feed->feed_url; ?>"><?php echo $this->planet->get_feed_title($feed->feed_url); ?></a></li>
			<?php endforeach; ?>
		</ul>
		
		<h2>Subscribe</h2>
		<p>Coming soon!</p>
		
		<h2>Other Planets</h2>
		<ul>
			<li xmlns="http://www.w3.org/1999/xhtml"><a href="http://planet.mozilla.org/projects/">Projects</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://education.mozilla.org/planet/">Mozilla Education</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://planet.mozilla.org/interns/">Mozilla Interns</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://planet.mozillamessaging.com/">Mozilla Messaging</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://mozilla.com.cn/topic/3/">Mozilla Online (Chinese)</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://planet.mozilla.org/research/">Mozilla Research</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://planet.bugzilla.org/">Planet Bugzilla</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://planet.firefox.com/">Planet Firefox</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://planet.firefox.com/mobile/">Planet Firefox Mobile</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://ux.firefox.com/">Planet UX</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://quality.mozilla.org/community">Planet QMO</a></li><li xmlns="http://www.w3.org/1999/xhtml"><a href="http://planet.mozilla.org/ateam/">Planet Automation</a></li>
		</ul>
	</section>
	<section class="span7">
		<?php foreach($articles as $post): ?>
		<article class="row">
			<!--<aside class="span1">
				<span style="display:block;width:68px;height:68px;background:#ccc;">&nbsp;</span>
				<?php echo $post->feed_title; ?>
			</aside>-->
			<section class="span7">
				<h1><?php echo $post->title; ?></h1>
				<h2><?php echo $post->feed_title; ?></h2>
				<?php echo $post->content; ?>
				<p>Published <time datetime="<?php echo date('Y-m-d G:i', $post->datetime); ?>"><?php echo date('l, jS F', $post->datetime); ?> at <?php echo date('g:ia', $post->datetime); ?></time></p>
			</section>
		</article>
		<?php endforeach; ?>
	</section>
</section>