<?php $sidebar = alx_sidebar_secondary(); ?>

<div class="sidebar s2">
	
	<a class="sidebar-toggle" title="<?php esc_html_e('Expand Sidebar','kontrast'); ?>"><i class="fa icon-sidebar-toggle"></i></a>
	
	<div class="sidebar-content">
		
		<?php if ( ot_get_option( 'post-nav' ) == 's2') { get_template_part('inc/post-nav'); } ?>
		
		<?php dynamic_sidebar($sidebar); ?>
		
	</div><!--/.sidebar-content-->
	
</div><!--/.sidebar-->