<html>
<head>
	<title>Rho Tau Lambda Chapter | Alpha Phi Alpha Fraternity, Inc.</title>
	<?php include 'head-info.php'; ?>
    <?php wp_head(); ?>
</head>
<body>
    <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
	<div class="cover-container"></div>
	<?php if (is_front_page()) {
        include 'page-home.php';	
    } else if (is_page()) {
        include 'page-standard.php';
    } else if (is_single()) {
        include 'page-event.php';
    } else if (is_404()) {
        include 'page-404.php';
    } ?>
    <?php wp_footer(); ?>
</body>
</html>
