<div class="event-images">
            	<?php $my_query = new WP_Query('category_name=Event&posts_per_page=2');
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<figure class="left">
                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </figure>
                <div class="event-text right">
                	<?php $currentDate = strtotime(date("Y-m-d")); $eventDate = strtotime(get_field("event_date")); ?>
        			<?php if ($eventDate >= $currentDate) : ?>
                		<?php echo get_field("paypal_link"); ?>
                    <?php endif; ?>
                    <?php $feat_image_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <div class="download-image"><a href="<?php echo $feat_image_url; ?>" target="_blank" download><h1>Download Image</h1></a></div>
                    <div class="share-event"><a href="javascript:;"><h1>Share Event</h1></a></div>
                    <div class="addthis-share">
                        <div id="social-share" class="addthis_toolbox addthis_default_style" addthis:url="<?php echo get_permalink(); ?>" addthis:title="Join me at the <?php echo get_the_title() . "! Sponsored by the Rho Tau Lambda Chapter of Alpha Phi Alpha"; ?>">
                            <a class="social-icon facebook-share addthis_button_facebook"><span class="fa fa-facebook"></span></a>
                            <a class="social-icon twitter addthis_button_twitter"><span class="fa fa-twitter"></span></a>
                            <a class="social-icon email addthis_button_email"><span class="fa fa-envelope"></span></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
				<?php endwhile; wp_reset_query(); ?>
            </div>