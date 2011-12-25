<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
	<div class="content-container">
		<div class='content-title'><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
		<div class="content-body">
		<?php the_content(); ?>
		</div>
		<span class="content-tags"> <?php the_tags( 'Tags: ', '&nbsp;<span class="bull">&nbsp;</span>&nbsp;', '' ); ?> </span><span class="content-categories">Categories: <?php the_category('&nbsp;<span class="bull">&nbsp;</span>&nbsp;'); ?></span><span class="content-date">Posted: <time datetime="<?php the_time('c'); ?>" pubdate><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>.</time></span>
	</div>
</article>
	<?php endwhile; else: ?>
<div class="content-container system-message"><?php _e('Sorry, no posts matched your criteria.'); ?></div>
<?php endif; ?>
