<section class="row">
	<section class="pager pager-with-tabs pager-auto-rotate pager-no-history" id="home-promo">
	
	  <div class="pager-content pager-selected-promo-collusion" style="opacity: 0.916241;">
		
		<div id="page-promo-firefox" class="pager-page default-page" style="display: none;">
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
		
	    <div id="page-promo-android" class="pager-page default-page" style="display: none;">
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
	
	    <div id="page-promo-collusion" class="pager-page" style="display: block;">
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
	
	    <div id="page-promo-flicks" class="pager-page" style="display: none;">
	      <script>
	        document.getElementById('promo-flicks').id = 'page-promo-flicks';
	      </script>
	      <a class="container" href="https://firefoxflicks.mozilla.org/?WT.mc_id=mofxflicks&amp;WT.mc_ev=click">
	        <img alt="Firefox Flicks artwork" src="//www.mozilla.org/media/img/home/promo-flicks.jpg">
	        <div>
	          <h3>Congratulations to all the winners of Firefox Flicks!</h3>
	          <p>Watch the winning videos&nbsp;»</p>
	        </div>
	      </a>
	    </div>
	
	  </div>
	
	  <ul class="pager-tabs pager-selected-promo-collusion">
	  	<li><a href="#promo-firefox" class="">●</a></li>
	    <li><a href="#promo-android" class="">●</a></li>
	    <li><a href="#promo-collusion" class="">●</a></li>
	    <li><a href="#promo-flicks" class="">●</a></li>
	  </ul>
	
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
			<input type="text" name="email" placeholder="your email here" required="true" /> <button type="submit" class="button-white">Sign up</button>
		</form>
	</article>
</section>