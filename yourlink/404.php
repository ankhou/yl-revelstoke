<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<article id="post-not-found" class="clearfix">
						
						<header>

							<div class="hero-unit">
							
								<h1><?php _e("404 Error","wpbootstrap"); ?></h1>
								<p class="lead"><?php _e("We've lost the signal.","wpbootstrap"); ?></p>
															
							</div>
													
						</header> <!-- end article header -->
					
						<section class="post_content">
							
							<p><?php _e("The page you were looking for was not found. Please navigate using the menu or search using the form below.","wpbootstrap"); ?></p>

							<div class="row">
								<div class="col col-lg-12">
									<?php get_search_form(); ?>
								</div>
							</div>
					
						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>