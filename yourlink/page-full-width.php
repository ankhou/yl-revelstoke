<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col col-lg-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<!--<div class="page-header"><h1><?php the_title(); ?></h1></div>-->
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
							
							<?php if( have_rows('page-tabs') ): ?>
							<?php $a = 0; $b = 0; ?>
								<ul id="page-tabs" class="nav nav-tabs">
								<?php while( have_rows('page-tabs') ): the_row(); ?>
									<?php $a++; ?>
									<li <?php if($a == 1){ echo ' class="active"'; } ?>><a href="#tab<?php echo $a ?>" data-toggle="tab"><?php the_sub_field('tab-title'); ?></a></li>
								<?php endwhile; ?>
								</ul>
								<div id="page-tabs-content" class="tab-content">
								<?php while( have_rows('page-tabs') ): the_row(); ?>
									<?php $b++; ?>
									<div id="tab<?php echo $b; ?>" class="tab-pane fade<?php if($b == 1){ echo ' active in'; } ?>">
									<?php the_sub_field('tab-content'); ?>
									</div>
								<?php endwhile; ?>
								</div>
							<?php endif; ?>
							
							<?php if( have_rows('sectors') ): ?>
							<?php $a = 0; $b = 0; ?>
								<div class="col-md-3 col-sm-12">
									<ul id="page-tabs" class="nav nav-pills nav-stacked">
									<?php while( have_rows('sectors') ): the_row(); ?>
										<?php $a++; ?>
										<li <?php if($a == 1){ echo ' class="active"'; } ?>><a href="#tab<?php echo $a ?>" data-toggle="tab"><?php the_sub_field('title'); ?></a></li>
									<?php endwhile; ?>
									</ul>
									<hr />
								</div>
								<div id="page-tabs-content" class="tab-content col-sm-12 col-md-9 sector-tabs">
								<?php while( have_rows('sectors') ): the_row(); ?>
									<?php $b++; ?>
									<div id="tab<?php echo $b; ?>" class="tab-pane fade<?php if($b == 1){ echo ' active in'; } ?>">
									<div class="row">
									
										<div class="col-md-12">
										<div id="photo-carousel-<?php echo $b; ?>" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<?php $images = get_sub_field('gallery'); $c = 0; if( $images ): foreach( $images as $image ): ?>
													<li data-target="#photo-carousel" data-slide-to="<?php echo $c; ?>"<? if($c == 0){echo 'class="active"';} ?>></li>
													<?php $c++; ?>
												<?php endforeach; endif; ?>
											</ol>
											<!-- Wrapper for slides -->
											<div class="carousel-inner">
												<?php $images = get_sub_field('gallery'); $c = 0; if( $images ): foreach( $images as $image ): ?>
												<div class="item<? if($c == 0){echo ' active';}; $c++; ?>">
												<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
													<div class="carousel-caption">
														<?php echo $image['caption']; ?>
													</div>
												</div>
												<?php endforeach; endif; ?>
											</div>
											<!-- Controls -->
											<a class="left carousel-control" href="#photo-carousel-<?php echo $b; ?>" data-slide="prev">
												<span class="glyphicon glyphicon-chevron-left"></span>
											</a>
											<a class="right carousel-control" href="#photo-carousel-<?php echo $b; ?>" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"></span>
											</a>
										</div>
										</div>
									
										<div class="col-sm-12">
											<h2 class="sector-title"><?php the_sub_field('title'); ?></h2>
											<?php the_sub_field('description'); ?>
										</div>
										<?php if( have_rows('strengths') ): ?>
											<div class="col-xs-12 col-sm-6 col-md-8">
												<h3>Experience</h3>
												<ul class="list-group">
													<?php while( have_rows('strengths') ): the_row(); ?>
													<li class="list-group-item"><?php the_sub_field('strength'); ?></li>
													<?php endwhile; ?>
												</ul>
											</div>
										<?php endif; ?>
										<?php if( have_rows('partners') ): ?>
											<div class="col-xs-12 col-sm-6 col-md-4">
												<h3>Partners</h3>
												<?php while( have_rows('partners') ): the_row(); ?>
												<div class="media col-xs-6">
													<?php $image = wp_get_attachment_image_src(get_sub_field('logo'), 'thumbnail'); ?>
													<a class="col-xs-12" href="<?php the_sub_field('url'); ?>">
														<img alt="<?php the_sub_field('name'); ?>" class="media-object" src="<?php echo $image[0]; ?>" />
													</a>
												</div>
												<?php endwhile; ?>
											</div>
										<?php endif; ?>
									</div>
									</div>
								<?php endwhile; ?>
								</div>
							<?php endif; ?>
							
							<?php if( have_rows('aircraft') ): ?>
							<?php $a = 0; $b = 0; ?>
								<div class="col-md-3 col-sm-12">
									<ul id="page-tabs" class="nav nav-pills nav-stacked">
									<?php while( have_rows('aircraft') ): the_row(); ?>
										<?php $a++; ?>
										<li <?php if($a == 1){ echo ' class="active"'; } ?>><a href="#tab<?php echo $a ?>" data-toggle="tab"><?php the_sub_field('name'); ?></a></li>
									<?php endwhile; ?>
									</ul>
									<hr />
								</div>
								<div id="page-tabs-content" class="tab-content col-sm-12 col-md-9 sector-tabs">
								<?php while( have_rows('aircraft') ): the_row(); ?>
									<?php $b++; ?>
									<div id="tab<?php echo $b; ?>" class="tab-pane fade<?php if($b == 1){ echo ' active in'; } ?>">
										<div class="row">
											<div class="col-md-12">
												<?php $image = wp_get_attachment_image_src(get_sub_field('picture'), 'full'); ?>
												<img alt="<?php the_sub_field('name'); ?>" class="img-responsive img-rounded" src="<?php echo $image[0]; ?>" />
											</div>
											<div class="col-sm-12 col-md-6">
												<h2><?php the_sub_field('name'); ?></h2>
												<?php the_sub_field('description'); ?>
											</div>
											<div class="col-sm-12 col-md-6">
												<h3>Specifications</h3>
												<table class="table">
													<tbody>
														<tr>
															<th>Seating</th><td><?php the_sub_field('seating'); ?>
														</tr>
														<tr>
															<th>Economy Cruise</th><td><?php the_sub_field('cruise'); ?>
														</tr>
														<tr>
															<th>Range</th><td><?php the_sub_field('range'); ?>
														</tr>
														<tr>
															<th>External Load</th><td><?php the_sub_field('load'); ?>
														</tr>
														<tr>
															<th>Useful External</th><td><?php the_sub_field('useful'); ?>
														</tr>
													</tbody>
												</table>
												<a href="#" class="btn btn-red"><span class="glyphicon glyphicon-save"></span> Download Schematics</a>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
								</div>
							<?php endif; ?>
							
							<?php if( have_rows('photo-galleries') ): 
								$a = 0;
								?>
								<div class="row">
								<?php while( have_rows('photo-galleries') ): the_row(); 
									$a++;
									?>
									<div class="col-sm-12 col-md-6">
									<div id="photo-carousel-<?php echo $a; ?>" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<?php $images = get_sub_field('photos'); $b = 0; if( $images ): foreach( $images as $image ): ?>
												<li data-target="#photo-carousel" data-slide-to="<?php echo $b; ?>"<? if($b == 0){echo 'class="active"';} ?>></li>
												<?php $b++; ?>
											<?php endforeach; endif; ?>
										</ol>
										<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<?php $images = get_sub_field('photos'); $b = 0; if( $images ): foreach( $images as $image ): ?>
											<div class="item<? if($b == 0){echo ' active';}; $b++; ?>">
											<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
												<div class="carousel-caption">
													<?php echo $image['caption']; ?>
												</div>
											</div>
											<?php endforeach; endif; ?>
										</div>
										<!-- Controls -->
										<a class="left carousel-control" href="#photo-carousel-<?php echo $a; ?>" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<a class="right carousel-control" href="#photo-carousel-<?php echo $a; ?>" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
										</a>
									</div>
									</div>
								<?php endwhile; ?>
								</div>
							<?php endif; ?>
							
							<?php if( have_rows('partners') ): ?>
								<div class="row" id="partners">
								<?php while( have_rows('partners') ): the_row(); ?>
									<div class="col-xs-6 col-sm-4 col-md-3">
									<a href="<?php the_sub_field('partner_url'); ?>"><img alt="<?php the_sub_field('partner_name'); ?>" class="center-block" src="<?php the_sub_field('partner_logo'); ?>" /></a>
									</div>
								<?php endwhile; ?>
								</div>
							<?php endif; ?>
							
							<?php if(is_page(13) == true){
								$location = get_field('hq-address');
								?>
								<div class="row">
									<div id="contact-map" class="col-xs-12">
										<?php 
										if( !empty($location) ):
										?>
										<div class="acf-map">
											<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
										</div>
										<?php endif; ?>
									</div>
									<hr>
									<div id="contact-form" class="col-xs-12 col-sm-6 col-md-8">
										<?php echo do_shortcode('[contact-form-7 id="115" title="YourLink Revelstoke Contact Form"]'); ?>
									</div>
									<div id="contact-details" class="col-xs-12 col-sm-6 col-md-4">
										<ul class="lead list-unstyled">
										<li><a href="tel:<?php the_field('phone'); ?>"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;<?php echo get_field('phone', 'option'); ?></a></li>
										<hr>
										<li><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;<?php echo get_field('fax', 'option'); ?></li>
										<hr>
										<li><a href="mailto:<?php echo get_field('email', 'option'); ?>"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<?php echo get_field('email', 'option'); ?></a></li>
										</ul>
										<h3>Street Address</h3>
										<p><?php $location = get_field('location', 'option'); echo $location['address']; ?></p>
										<hr>
										<h3>Mailing Address</h3>
										<p><?php echo get_field('mailing', 'option'); ?></p>
									</div>
									<hr class="wide">
									<h2>Hours of Operation</h2>
									<hr>
									<div class="table-wrapper">
										<?php echo get_field('hours', 'option'); ?>
									</div>
								</div>
							<?php } ?>
							
							<?php if( have_rows('personnel') ):
								$a = 0;
								?>
								<?php while( have_rows('personnel') ): the_row(); ?>
									<?php $a++; 
									if($a == 1){ echo '<div class="row">'; }
									?>
									<div class="col-xs-12 col-sm-6 col-md-4 personnel wow zoomIn">
										<?php $image = wp_get_attachment_image_src(get_sub_field('portrait'), 'full'); ?>
										<img class="center-block img-circle" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_sub_field('portrait')) ?>" />
										<h3><?php the_sub_field('name'); ?><br />
										<small><?php the_sub_field('title'); ?></small></h3>
										<p><a href="tel:<?php the_sub_field('phone'); ?>"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;<?php the_sub_field('phone'); ?></a><br />
										<small><a href="mailto:<?php the_sub_field('email'); ?>"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<?php the_sub_field('email'); ?></a></small></p>
									</div>
									<?php if($a == 4 || $a == 8){
										echo '</div>';
										echo '<div class="row">';
									} ?>
								<?php endwhile; ?>
								</div>
							<?php endif; ?>
							
							<?php if( have_rows('bases') ): 
								$a = 0;
								?>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="panel-group" id="accordion">
										<?php while( have_rows('bases') ): the_row();
											$location = get_sub_field('location');
											?>
											<?php $a++; ?>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="#collapse<?php echo $a; ?>" data-toggle="collapse" data-parent="#accordion"><?php the_sub_field('name'); ?></a>
													</h4>
												</div>
												<div id="collapse<?php echo $a ?>" class="panel-collapse collapse<?php if($a == 1){ echo ' in'; } ?>">
													<div class="panel-body">
														<h3><a href="tel:<?php the_sub_field('phone'); ?>"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;<?php the_sub_field('phone'); ?></a></h3>
														<p><strong><?php the_sub_field('contact'); ?></strong></p>
														<p><?php echo $location['address']; ?></p>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-8">
										<div class="acf-map">
											<?php while ( have_rows('bases') ) : the_row(); 
												$location = get_sub_field('location');
												?>
												<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
													<h4><?php the_sub_field('title'); ?></h4>
													<p class="address"><?php echo $location['address']; ?></p>
													<p><?php the_sub_field('description'); ?></p>
												</div>
											<?php endwhile; ?>
										</div>
									</div>
								</div>
							<?php endif; ?>
					
						</section> <!-- end article section -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>