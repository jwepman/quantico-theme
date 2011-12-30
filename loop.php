<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
	<div class="content-container">
		<div class='content-title'><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
		<div class="content-body">
		<span class="thumbnail-inline">
		<?php
			//thumbnail style
			if (has_post_thumbnail() ){
				echo '<span id="index-thumbnail-'.$post->ID.'">';
				echo get_the_post_thumbnail($post->ID, 'thumbnail');
				echo '<script type="text/javascript">jQuery("#index-thumbnail-'.$post->ID.'").parent().parent().css("min-height","75px");</script>';
				echo '<script type="text/javascript">
					jQuery("#index-thumbnail-'.$post->ID.'").stop().fadeTo(500,0.6);
					jQuery("#index-thumbnail-'.$post->ID.'").hover(
					  function () {
						jQuery(this).stop().fadeTo(500,0.9)
					  }
					, function () {
						jQuery(this).stop().fadeTo(500,0.6);
					}
					);</script>';
				echo '</span>';
			}
		?>
		</span>
		<?php the_content(); ?>
		</div>
		<div class="content-meta-container">
		<div class="content-tags"><?php _e('Tags: '); ?><?php the_tags( '', '&nbsp;<span class="bull">&nbsp;</span>&nbsp;', '' ); ?> </div><div class="content-categories"><?php _e('Categories: '); ?><?php the_category('&nbsp;<span class="bull">&nbsp;</span>&nbsp;'); ?></div><div class="content-date"><?php _e('Posted on: '); ?> <time datetime="<?php the_time('c'); ?>" pubdate><?php the_time(get_option('date_format')); _e(' at '); the_time(get_option('time_format')); ?></time></div>
		</div>
	</div>
</article>
	<?php endwhile; else: ?>
<div class="content-container system-message"><?php _e('Sorry, no posts matched your criteria.'); ?></div>
<?php endif; ?>
