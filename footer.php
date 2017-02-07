<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Train 
* @since 	1.0.8
 */

?>		

	<?php $scroll= get_theme_mod('enable_scrolltotop','enable'); ?>		
	<?php if($scroll=='enable'):?>
		<div class="scroll-top-wrapper"> <span class="scroll-top-inner">
  			<i class="fa fa-2x fa-angle-up"></i>
    		</span>
    	</div>
    <?php endif;?>
<footer>
	<?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
		<section class="footer-info">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'Footer sidebar' ); ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<section class="copyright">
	    <div class="container">
	      	<div class="row">
	        	<div class="col-sm-4">
	        		<h6><?php echo esc_attr(get_theme_mod( 'copyright_textbox', __('Copyright &copy; 2016. Your Theme. All Rights Reserved.','train') )); ?>  </h6> </div>
	        		<div class="col-sm-4"><h6> <?php echo __('Developed by: ','train'); ?><a href="http://oceanwebthemes.com" rel="author"><?php echo __('oceanwebthemes','train'); ?></a></h6>
	        		</div>
	        	
	        	<?php $footer_menu= get_theme_mod('enable_footermenu','enable'); ?>		
				<?php if($footer_menu=='enable'):?>
		        	<div class="col-sm-4">
		        		<?php wp_nav_menu( array('theme_location'=>'secondary','menu_class'=>'list-inline') ); ?>
		        	</div>
	        	<?php endif;?>
	        </div>
	    </div>
	</section>

</footer>
	
		<!-- Tab to top scrolling -->
		
		<?php wp_footer(); ?>
	</body>
</html>