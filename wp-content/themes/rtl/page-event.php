<div id="page-event">
	<?php include 'menu.php'; ?>
    <?php include 'header.php'; ?>
    <div class="content">
    	<?php if (have_posts()) : while (have_posts()) : the_post(); the_post_thumbnail(); endwhile; endif; ?>
    </div>
    <?php include 'footer.php'; ?>
</div>
