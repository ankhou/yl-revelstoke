<?php
/*
Template Name: Flexible Content
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
							
							<?php if( get_field('layout') ): ?>
								
								<?php while( has_sub_field('layout') ): ?>
								
									<?php if( get_row_layout() == "text" ): 
										$intro = get_sub_field('intro'); ?>
										
										<?php if($intro == TRUE): ?>
											<div class="flexible-text">
										<?php endif; ?>
											<?php the_sub_field("text"); ?>
										<?php if($intro == TRUE): ?>
											</div>
										<?php endif; ?>
										
									<?php elseif( get_row_layout() == "heading" ): // layout: Heading ?>
									
										<h2><?php echo get_sub_field('heading'); ?></h2>
										
									<?php elseif( get_row_layout() == "cta" ): // layout: Call to Action ?>
									
									<section class="call-to-action flexible-content">
										<div class="container">
											<div class="row">
												<div class="col-md-6 wow slideInLeft">
													<a href="<?php echo get_sub_field('cta1_link'); ?>" class="btn btn-padded<?php if(get_sub_field('cta1_colours') == 'Business Blue'){echo " btn-secondary";} ?>">
														<?php echo get_sub_field('cta1_action'); ?>
													</a>
													<h1><?php echo get_sub_field('cta1_message'); ?></h1>
												</div>
												<?php if(get_sub_field('number') == 'Two'): ?>
												<div class="col-md-6 wow slideInRight">
													<a href="<?php echo get_sub_field('cta2_link'); ?>" class="btn btn-padded<?php if(get_sub_field('cta2_colours') == 'Business Blue'){echo " btn-secondary";} ?>">
														<?php echo get_sub_field('cta2_action'); ?>
													</a>
													<h1><?php echo get_sub_field('cta2_message'); ?></h1>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</section>
									
									<?php elseif( get_row_layout() == "table" ): // layout: Table ?>
									
									<div class="table-wrapper<?php if( get_sub_field('pricing') == TRUE ){ echo ' pricing-table'; } ?>">
										<?php the_sub_field('table'); ?>
									</div>
									<?php if( get_sub_field('notes') ) : ?>
									<div class="well table-notes">
									<em><p><?php echo get_sub_field('notes'); ?></p></em>
									</div>
									<?php endif; ?>

									<?php elseif( get_row_layout() == "file" ): // layout: File ?>
									
									<div class="row">
										<?php if(get_sub_field('image')) : 
											$image = get_sub_field('image'); ?>
											<div class="col-md-2 th-img-container pull-left">
												<img src="<?php echo $image; ?>">
											</div>
										<?php else : ?>
											<div class="col-md-2 th-img-container pull-left">
												<i class="fa fa-file-o fa-5x color-primary opacity-05"></i>
											</div>
										<?php endif; ?>
										<div class="col-md-10">
										<?php if(get_sub_field('name')) : 
											$name = get_sub_field('name'); ?>
											<h2><?php echo $name; ?></h2>
										<?php endif; ?>
										<?php if(get_sub_field('description')) : 
											$description = get_sub_field('description'); ?>
											<p><?php echo $description; ?></p>
										<?php endif; ?>
											<a href="<?php echo get_sub_field('file'); ?>" class="btn btn-primary btn-padded"><i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;Download File</a>
										</div>
									</div>
										
									<?php elseif( get_row_layout() == "link_boxes" ): // layout: Link Boxes ?>
										
										<div class="highlight flexible-content">
											<div class="container">
												<div class="row">
													<h2 class="text-center text-caps"><strong><?php echo get_sub_field('heading'); ?></strong></h2>
													<?php if( get_sub_field('links') ): ?>
														<?php while( has_sub_field('links') ): ?>
														<div class="col-xs-12 col-sm-4 text-center wow zoomIn">
															<img class="img-padded img-rounded" src="<?php echo get_sub_field('image'); ?>">
															<p><a class="btn btn-padded" href="<?php echo get_sub_field('button_link'); ?>"><?php echo get_sub_field('button_text'); ?></a></p>
															<p><?php echo get_sub_field('link_description'); ?></p>
														</div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
											</div>
										</div>
									
									<?php elseif( get_row_layout() == "link_list" ): // layout: Link List ?>
										
										<div class="flexible-content link-list">
											<div class="container">
												<div class="row">
													<?php if( get_sub_field('links') ): ?>
														<?php while( has_sub_field('links') ): ?>
														<div class="col-xs-12 col-sm-4 col-md-3">
															<h3<?php if(get_sub_field('colour') == "Business Blue"){echo ' class="secondary"';} ?>><?php echo get_sub_field('heading'); ?></h3>
															<p><?php echo get_sub_field('description'); ?></p>
															<p><a class="btn<?php if(get_sub_field('colour') == "Business Blue"){echo ' btn-secondary';}else{echo ' btn-primary';} ?>" href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('text'); ?></a></p>
														</div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
											</div>
										</div>
									
									<?php elseif( get_row_layout() == "single_button" ): // layout: Single Button ?>
									
										<p class="text-center flexible-btn">
											<a class="btn btn-padded<?php if(get_sub_field('colour') == 'Home Blue'){echo ' btn-primary';}else{echo ' btn-secondary';}; ?>" href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('text'); ?></a>
										</p>
										
									<?php elseif( get_row_layout() == "hero" ): // layout: Hero Content ?>
									
									<div<?php if( get_sub_field('id') ){echo ' id="' . get_sub_field('id') . '"';} ?> class="hero flexible-content">
										<?php if( get_sub_field('align') == "Text on left" ): ?>
										<div class="col-xs-12 col-sm-5">
											<h1<?php if( get_sub_field('colours') == 'Business Blue' ){echo ' class="secondary"';} ?>><?php echo get_sub_field('heading'); ?></h1>
											<p class="tagline"><?php echo get_sub_field('lead'); ?></p>
											<?php if(get_sub_field('button_option') == TRUE): ?>
											<p><a href="<?php echo get_sub_field('button_link'); ?>" class="btn btn-primary btn-padded<?php if( get_sub_field('colours') == 'Business Blue' ){echo ' btn-secondary';} ?>"><?php echo get_sub_field('button_text'); ?></a></p>
											<? endif; ?>
										</div>
										<div class="col-xs-12 col-sm-7">
											<img class="slideInRight wow" src="<?php echo get_sub_field('image'); ?>">
										</div>
										<?php else: ?>
										<div class="col-xs-12 col-sm-7">
											<img class="slideInLeft wow" src="<?php echo get_sub_field('image'); ?>">
										</div>
										<div class="col-xs-12 col-sm-5 text-right">
											<h1<?php if( get_sub_field('colours') == 'Business Blue' ){echo ' class="secondary"';} ?>><?php echo get_sub_field('heading'); ?></h1>
											<p class="tagline"><?php echo get_sub_field('lead'); ?></p>
											<?php if(get_sub_field('button_option') == TRUE): ?>
											<p><a href="<?php echo get_sub_field('button_link'); ?>" class="btn btn-primary btn-padded<?php if( get_sub_field('colours') == 'Business Blue' ){echo ' btn-secondary';} ?>"><?php echo get_sub_field('button_text'); ?></a></p>
											<? endif; ?>
										</div>
										<?php endif; ?>
									</div>

									<?php elseif( get_row_layout() == "team" ): // layout: Team Members ?>

									<?php if( have_rows('profile') ):
										$a = 0;
										?>
										<?php while( have_rows('profile') ): the_row(); ?>
											<?php $a++; 
											if($a == 1){ echo '<div class="row">'; }
											?>
											<div class="col-xs-12 col-sm-6 col-md-4 personnel wow zoomIn">
												<img class="center-block img-circle" src="<?php echo get_sub_field('profile_photo'); ?>" alt="Photo of <?php echo get_sub_field('profile_name'); ?>" />
												<h3><?php the_sub_field('profile_name'); ?><br />
												<small><?php the_sub_field('profile_title'); ?></small></h3>
												<p><a href="tel:<?php the_sub_field('profile_number'); ?>"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;<?php the_sub_field('profile_number'); ?></a>
												<?php if(get_sub_field('profile_email')) : ?>
												<br />
												<small><a href="mailto:<?php the_sub_field('profile_email'); ?>"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<?php the_sub_field('profile_email'); ?></a></small>
												<?php endif; ?>
												</p>
											</div>
											<?php if($a == 3 || $a == 6){
												echo '</div>';
												echo '<div class="row">';
											} ?>
										<?php endwhile; ?>
										</div>
									<?php endif; ?>
									
									<?php elseif( get_row_layout() == "tabs" ): // layout: Tabs ?>
									
									<?php if( have_rows('tab') ): ?>
									<?php $title = 0; $content = 0; ?>
										<ul id="page-tabs" class="nav nav-tabs">
										<?php while( have_rows('tab') ) : the_row() ?>
											<?php $title++; ?>
											<li <?php if($title == 1){ echo ' class="active"'; } ?>><a href="#tab<?php echo $title ?>" data-toggle="tab"><?php the_sub_field('tab-title'); ?></a></li>
										<?php endwhile; ?>
										</ul>
										<div id="page-tabs-content" class="tab-content">
										<?php while( have_rows('tab') ) : the_row() ?>
											<?php $content++; ?>
											<div id="tab<?php echo $content; ?>" class="tab-pane fade<?php if($content == 1){ echo ' active in'; } ?>">
											<?php the_sub_field('tab-content'); ?>
											</div>
										<?php endwhile; ?>
										</div>
									<?php endif; ?>
									
									<?php elseif( get_row_layout() == "divider" ): // layout: Divider ?>
									
									<?php if( get_sub_field('hidden') == TRUE ){
									$invisible = " invisible";
									} else {
									$invisible = "";
									} ?>
									
									<hr class="<?php if( get_sub_field('width') == 'Medium' ){echo 'wide' . $invisible;}elseif( get_sub_field('width') == 'Wide' ){echo 'divider' . $invisible;}else{echo $invisible;} ?>">
									
									<?php endif; ?>
									
								<?php endwhile; ?>
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