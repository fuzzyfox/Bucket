<?php $this->extends_view("theme/basic/generic"); ?>

<?php $this->start_block('styles'); ?>
<?php Assets::css_group('events', array('events.less')); ?>
<?php $this->end_block('styles'); ?>

<?php $this->start_block('title'); ?>
<h1>Events</h1>
<?php $this->end_block('title'); ?>

<?php $this->start_block('content'); ?>
<?php if($events): foreach ($events as $event): ?>
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
<?php endforeach;else: ?>
<p>No events here... more to come soon we hope!</p>
<?php endif; ?>
<?php $this->end_block('content'); ?>
