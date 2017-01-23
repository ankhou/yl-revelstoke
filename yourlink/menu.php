<?php if( have_rows('primary_links', 'option') ): ?>
<nav id="nav-full-screen">
	<button id="fullscreen-close" class="close-parent">&#735;</button>
	<div class="menu-fullscreen-container">
		<ul id="menu-fullscreen" class="menu container-fluid">
			<?php while( have_rows('primary_links', 'option') ): the_row(); ?>
				<?php if( get_sub_field('include_sub_menu', 'option') == TRUE ): ?>
				<li class="col-md-4">
				<a href="<? echo get_sub_field('link'); ?>"><? echo get_sub_field('name'); ?></a>
				<?php if( have_rows('sub_menu', 'option') ): ?>
					<ul class="sub-menu">
					<?php while( have_rows('sub_menu', 'option') ): the_row(); ?>
						<li>
						<a href="<? echo get_sub_field('link'); ?>"><? echo get_sub_field('name'); ?></a>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				</li>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php while( have_rows('primary_links', 'option') ): the_row(); ?>
				<?php if( get_sub_field('include_sub_menu', 'option') == FALSE ): ?>
				<li class="col-md-12">
				<a href="<? echo get_sub_field('link'); ?>"><? echo get_sub_field('name'); ?></a>
				</li>
				<?php endif; ?>
			<?php endwhile; ?>
		</ul>
		<nav id="nav-webmail">
			<a target="_blank" href="<?php echo get_field('webmail', 'option'); ?>" class="btn btn-padded"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;Webmail</a>
		</nav>						
		<nav id="nav-phone">
			<a href="tel:<?php echo get_field('phone', 'option'); ?>" title="Call YourLink Revelstoke"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;&nbsp;<strong><?php echo get_field('phone', 'option'); ?></strong></a>
		</nav>
	</div>
</nav>
<?php endif; ?>