<div class="content">
	<div class="current-events">
        <h1 class="section-title current clear">Upcoming Events</h1>
        <?php $my_query = new WP_Query('category_name=Event');
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <?php $currentDate = strtotime(date("Y-m-d")); $eventDate = strtotime(get_field("event_date")); ?>
        <?php if ($eventDate >= $currentDate) : ?>
        	<figure class="left">
                <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </figure>
        <?php endif; endwhile; wp_reset_query(); ?>
    </div>
    <div class="past-events">
    	<h1 class="section-title past clear">Past Events</h1>
        <?php $my_query = new WP_Query('category_name=Event');
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <?php $currentDate = strtotime(date("Y-m-d")); $eventDate = strtotime(get_field("event_date")); ?>
        <?php if ($eventDate < $currentDate) : ?>
        	<figure class="left">
                <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </figure>
        <?php endif; endwhile; wp_reset_query(); ?>
	</div>
</div>
