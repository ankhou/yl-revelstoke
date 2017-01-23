<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="home" class="col-xs-12 col-sm-5">
					<h1><strong>Home</strong> Connections</h1>
					<p class="tagline">Competitive Internet, phone and Cable TV services</p>
					<p><a href="<?php echo home_url(); ?>/home-connections" class="btn btn-primary btn-padded">View plans & pricing</a></p>
				</div>
				
				<div class="col-xs-12 col-sm-7">
					<img class="slideInRight wow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-devices.png" alt="For home computers, tablets, and cellphones">
				</div>
				
				<hr class="divider">
				
				<div class="col-xs-12 col-sm-7">
					<img class="slideInLeft wow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/business-services.png" alt="Tech support, advertising, and business solutions">
				</div>
				
				<div id="business" class="col-xs-12 col-sm-5 text-right">
					<h1 class="secondary"><strong>Business</strong> Services</h1>
					<p class="tagline">Point of Sale, Web Hosting, IT Support and Local Advertising</p>
					<p><a href="<?php echo home_url(); ?>/business-services" class="btn btn-secondary btn-padded">View products & services</a></p>
				</div>
    
			</div> <!-- end #content -->
			
		</div> <!-- end container -->
		
		<div class="highlight">
		
			<div class="container">
			
				<div class="row">
				
					<h2 class="text-center text-caps"><strong>Customer Support</strong></h2>
					
					<div class="col-xs-12 col-sm-4 text-center wow zoomIn">
						<img class="img-padded" src="<?php echo get_stylesheet_directory_uri(); ?>/images/webmail-icon.png">
						<p><a class="btn btn-padded" href="#">Launch Webmail</a></p>
					</div>
					
					<div class="col-xs-12 col-sm-4 text-center wow zoomIn delay02">
						<img class="img-padded" src="<?php echo get_stylesheet_directory_uri(); ?>/images/guides-icon.png">
						<p><a class="btn btn-padded" href="<?php echo home_url(); ?>/support/equipment-manuals">Equipment Manuals</a></p>
					</div>
					
					<div class="col-xs-12 col-sm-4 text-center wow zoomIn delay04">
						<img class="img-padded" src="<?php echo get_stylesheet_directory_uri(); ?>/images/payperview-icon.png">
						<p><a class="btn btn-padded" href="<?php echo home_url(); ?>/support/pay-per-view">Pay-Per-View</a></p>
					</div>
				
				</div>
			
			</div>
		
		

<?php get_footer(); ?>