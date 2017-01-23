<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-primary" type="button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">Search</button>
      </span>
    </div><!-- /input-group -->
</form>