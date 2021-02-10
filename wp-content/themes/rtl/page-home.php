<div id="page-home">
	<?php include 'menu.php'; ?>
    <?php include 'header.php'; ?>
    <div class="content">
        <div class="president-section">
            <h1 class="section-title">President's Message</h1>
            <div class="president-profile">
                <img src="http://rhotaulambda.org/wp-content/uploads/2016/05/john-purnell.jpg" />
                <p>President John Purnell</p>
            </div>
            <div class="message">
                <p>Goodwill is the Monarch of this house. On behalf of the Brothers of the Rho Tau Lambda Chapter of Alpha Phi Alpha Fraternity Incorporated, welcome to our official website. The Rho Tau Lambda Chapter is a young, yet special chapter. The Rho Tau Lambda takes special pride in being a chapter diverse and rich with brotherhood; reclaiming brothers from all over the United States to serve the Baltimore Metro area. On behalf of the Brothers of the Rho Tau Lambda Chapter of Alpha Phi Alpha Fraternity Incorporated, we would like to thank all of our past and current supporters and officially welcome the new supporters.</p>
            </div>
        </div>
        <div class="gallery-container">
            <div id="slideshow">
                <div class="fa fa-angle-left"></div>
                <div class="photo-gallery">
                    <!--<div class="photo">
                        <img src="http://rhotaulambda.org/wp-content/uploads/2016/05/RTL-1.jpg" />
                    </div>-->
                    <div class="photo">
                        <img src="http://rhotaulambda.org/wp-content/uploads/2016/05/IMG_0675.jpg" />
                    </div>
                    <div class="photo">
                        <img src="http://rhotaulambda.org/wp-content/uploads/2016/05/rtl-gallery-1.png" />
                    </div>
                    <!--<div class="photo">
                        <img src="http://rhotaulambda.org/wp-content/uploads/2016/05/rtl-gallery-2.png" />
                    </div>-->
                </div>
                <div class="fa fa-angle-right"></div>
            </div>
        </div>
        <?php //echo do_shortcode('[pjc_slideshow slide_type="home-page-slideshow"]');?>
        <div class="events-section left">
            <!--<h1 class="section-title">Upcoming Events</h1>
            <a href="https://www.eventbrite.com/e/black-and-gold-masquerade-ball-tickets-50186094961?utm_term=eventpage&invite=MTUwNDEwNDYvRmdhcnJldHQzNTdqMUBnbWFpbC5jb20vMA%3D%3D%0A&utm_campaign=inviteformalv2&utm_source=eb_email&utm_medium=email&ref=enivtefor001" target="_blank"><img style="width: 100%; margin-top: 10px;" src="http://rhotaulambda.org/wp-content/uploads/2018/09/bg2018.jpeg" /></a>-->

            <div class="event-images">
                <?php $my_query = new WP_Query('category_name=Event&posts_per_page=1');
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
        </div>
        <div class="social-section right">
            <?php echo do_shortcode('[instagram-feed]'); ?>
           <!-- <script src="http://snapwidget.com/js/snapwidget.js"></script>
            <iframe src="http://snapwidget.com/bd/?u=cnRsYWxwaGFzfGlufDI5NHwxfDN8fHllc3wwfG5vbmV8b25TdGFydHxub3xubw==&ve=220316" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:3px solid #000; overflow:hidden; width:294px; height:1263px"></iframe>-->
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>
