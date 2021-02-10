<link rel="shortcut icon" href="<?php echo content_url(); ?>/themes/rtl/images/favicon.ico"/>
<meta name="viewport" content="width=device-width", initial-scale=1"">

<?php if (is_single()) : ?>
<?php $feat_image_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<meta property="og:image" content="<?php echo $feat_image_url; ?>" />
<meta property="og:title" content="<?php echo get_the_title() . " | Rho Tau Lambda - Alpha Phi Alpha Fraternity, Inc."; ?>" />
<meta property="og:url" content="<?php echo get_permalink(); ?>" />
<?php endif; ?>

<!-- CSS Files -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400italic,700" type="text/css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://perfectpickem.com/wp-content/plugins/jetpack/css/jetpack.css" type="text/css">
<link rel="stylesheet" href="<?php echo content_url(); ?>/themes/rtl/css/style.css" type="text/css">
<link rel="stylesheet" href="<?php echo content_url(); ?>/themes/rtl/css/tablet.css" type="text/css">
<link rel="stylesheet" href="<?php echo content_url(); ?>/themes/rtl/css/mobile.css" type="text/css">

<!-- Script Files -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54a1b25a2da792fa" async="async"></script>
<script type="text/javascript" src="<?php echo content_url(); ?>/themes/rtl/js/scripts.js"></script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80911883-1', 'auto');
  ga('send', 'pageview');
</script>
