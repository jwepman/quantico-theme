<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
	<div class="content-container">
		<div class='content-title'><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
		<div class="content-body">
		<?php the_content(); ?>
		</div>
		<span class="content-tags"><?php _e('Tags: '); ?><?php the_tags( '', '&nbsp;<span class="bull">&nbsp;</span>&nbsp;', '' ); ?> </span><span class="content-categories"><?php _e('Categories: '); ?><?php the_category('&nbsp;<span class="bull">&nbsp;</span>&nbsp;'); ?></span><span class="content-date"><?php _e('Posted on: '); ?> <time datetime="<?php the_time('c'); ?>" pubdate><?php the_time(get_option('date_format')); _e(' at '); the_time(get_option('time_format')); ?></time></span>
	</div>
</article>
	<?php endwhile; else: ?>
<div class="content-container system-message"><?php _e('Sorry, no posts matched your criteria.'); ?></div>
<?php endif; ?>
