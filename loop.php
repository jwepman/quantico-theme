<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="content-container">
		<div class='content-title'><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
		<div class="content-body">
			<?php the_content(); ?>
		</div>
	</div>
	<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
