<?php
// Get tags from Wordpress page
$tagList = "";
$tags = get_the_tags($post->ID);
if ($tags) {
	foreach ($tags as $tag) {
		$tagList .= $tag->name;
	}
}

// Check page type
$pageType = "";
if (strpos($tagList, 'events') !== false) {
	$pageType = "events";
} else if (strpos($tagList, 'orders') !== false) {
	$pageType = "orders";
} else {
	$pageType = "standard"; 	
}
?>

<div id="page-standard">
	<?php include 'menu.php'; ?>
    <?php include 'header.php'; ?>
    <div class="content">
    	<?php if ($pageType == "standard") { if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; } ?>
    	<?php if ($pageType == "events") { include 'section-events.php'; } ?>
    	<?php if ($pageType == "orders") { include 'section-orders.php'; } ?>
    </div>
    <?php include 'footer.php'; ?>
</div>
