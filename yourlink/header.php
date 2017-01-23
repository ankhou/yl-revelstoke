<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PCSHJ4');</script>
        <!-- End Google Tag Manager -->
        
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
				
	</head>
	
	<body <?php body_class(); ?>>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCSHJ4"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
	
		<div class="body-wrapper">
				
		<header role="banner"<?php if(is_front_page() && get_field('banner_image')){
		echo ' style="background-image:url(' . get_field('banner_image') . '"';
		} elseif(!is_front_page() && get_field('banner_image_subpage')){
		echo ' style="background-image:url(' . get_field('banner_image_subpage') . '"';
		} else {
		echo ' style="background-image:url(' . get_stylesheet_directory_uri() . '/images/yourlink-homepage-bg.jpg)"';
		} ?>>
				
			<div class="navbar navbar-default">
				<div class="container-fluid">
          
					<div class="navbar-header">
						<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yourlink-logo.png" alt="<?php bloginfo('name'); ?>" /></a>
					</div>

					<nav id="nav-webmail">
						<a target="_blank" href="<?php echo get_field('webmail', 'option'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;Webmail</a>
					</nav>						
					<nav id="nav-phone">
						<a href="tel:<?php echo get_field('phone', 'option'); ?>" title="Call YourLink Revelstoke"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;&nbsp;<strong><?php echo get_field('phone', 'option'); ?></strong></a>
					</nav>
					
					<nav id="nav-main-menu">
						<button type="button" id="fullscreen-open">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php if( have_rows('navigation_menu', 'option') ): ?>
						<ul id="menu-main-menu" class="nav navbar-nav">
						<?php while( have_rows('navigation_menu', 'option') ) : the_row(); ?>
						<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_sub_field('link', 'option'); ?>"><?php echo get_sub_field('title', 'option'); ?></a></li>
						<?php endwhile; ?>
						</ul>
						<?php endif; ?>
					</nav>
					
					<?php get_template_part( 'menu' ); ?>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		<div id="statement">
			<?php if(is_front_page() && !get_field('banner_message')) : ?>
			<p class="text-center animated flipInX delay02 duration2">Connecting our Community</p>
			<p class="text-center"><a href="#home" class="btn btn-primary btn-padded animated flipInX delay04"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;For your home</a>
			<a href="#business" class="btn btn-secondary btn-padded animated flipInX delay06"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;&nbsp;&nbsp;For your business</a></p>
			<?php elseif(is_front_page() && get_field('banner_message')) : ?>
			<p class="text-center animated flipInX delay02 duration2"><?php echo get_field('banner_message'); ?></p>
			<p class="text-center"><a href="#home" class="btn btn-primary btn-padded animated flipInX delay04"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;For your home</a>
			<a href="#business" class="btn btn-secondary btn-padded animated flipInX delay06"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;&nbsp;&nbsp;For your business</a></p>
			<?php elseif(!is_front_page() && get_field('banner_message_subpage')) : ?>
			<h1 class="text-center animated flipInX delay02"><?php echo get_field('banner_message_subpage'); ?></h1>
			<?php else : ?>
			<h1 class="text-center animated flipInX delay02"><?php wp_title(''); ?></h1>
			<?php endif; ?>
		</div>
		
		<div class="yourlink-mask"></div>
		</header> <!-- end header -->
		
		<div class="container">
