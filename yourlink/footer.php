		<?php if(is_front_page()) : ?>
		<section id="socialbox" class="container">
			<div class="col-md-6">
				<div id="lifestream">&nbsp;</div>
			</div>
			<div class="col-md-6">
				<div id="instafeed" class="text-center"></div>
			</div>
			<hr class="wide">
			<div class="col-md-4 text-center">
				<a href="<?php echo get_field('facebook', 'option'); ?>" class="btn btn-primary btn-padded color-facebook"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;Like us on Facebook</a>
				<hr class="invisible">
			</div>
			<div class="col-md-4 text-center">
				<a href="<?php echo get_field('instagram', 'option'); ?>" class="btn btn-primary btn-padded color-instagram"><i class="fa fa-instagram"></i>&nbsp;&nbsp;&nbsp;Follow us on Instagram</a>
				<hr class="invisible">
			</div>
			<div class="col-md-4 text-center">
				<a href="<?php echo get_field('twitter', 'option'); ?>" class="btn btn-primary btn-padded color-twitter"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;Follow us on Twitter</a>
				<hr class="invisible">
			</div>
		</section>
		<?php endif; ?>

		</div>
		
			<?php if(get_field('cta-link')) : ?>
				<section class="call-to-action">
					<div class="container">
						<div class="row">
								<a href="<?php echo get_field('cta-link'); ?>" class="btn btn-padded"><?php echo get_field('cta-action'); ?></a>
								<h1><?php echo get_field('cta-message'); ?></h1>
						</div>
					</div>
				</section>
			<?php endif; ?>		

			<footer role="contentinfo">
				
				<div id="inner-footer" class="clearfix container">
				
					<nav class="col-md-12" id="footer-nav">
						<?php if( have_rows('navigation_menu', 'option') ): ?>
						<ul id="menu-main-menu" class="nav navbar-nav">
						<?php while( have_rows('navigation_menu', 'option') ) : the_row(); ?>
						<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_sub_field('link', 'option'); ?>"><?php echo get_sub_field('title', 'option'); ?></a></li>
						<?php endwhile; ?>
						</ul>
						<?php endif; ?>
					</nav>
					
					<div class="col-xs-12 col-sm-4 col-md-6" id="footer-tel">
						<p><a href="tel:2508375246"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;250.837.5246</a></p>
					</div>
					
					<div class="col-md-6">
						<ul class="footer-social">
							<li class="facebook"><a href="<?php echo get_field('facebook', 'option'); ?>" class="color-facebook" title="YourLink Revelstoke on Facebook"><i class="fa fa-facebook fa-2x"></i></a></li>
							<li class="instagram"><a href="<?php echo get_field('instagram', 'option'); ?>" class="color-instagram" title="YourLink Revelstoke on Instagram"><i class="fa fa-instagram fa-2x"></i></a></li>
							<li class="twitter"><a href="<?php echo get_field('twitter', 'option'); ?>" class="color-twitter" title="YourLink Revelstoke on Twitter"><i class="fa fa-twitter fa-2x"></i></a></li>
						</ul>
					</div>
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<script>
			new WOW().init();
		</script>
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</div><!--end .body-wrapper-->

	</body>

</html>