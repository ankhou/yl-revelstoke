<?php
/*
Template Name: File Download
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
							
							<?php if( have_rows('files') ): ?>
								<hr>
								<?php while( have_rows('files') ): the_row(); ?>
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
									<hr class="wide">
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