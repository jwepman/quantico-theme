<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- 
<div class="main-content-container">
	<div class="content-container">
		<div class="content-title">I'm a title!</div>
		<p class="content-body">Lorem ipsum sit dolor amit blah blah blah</p>
	</div>
</div>
-->
<div class="main-content-container">
<?php get_template_part( 'loop', 'index' ); ?>
</div>
<br><br>
<?php get_footer(); ?>
