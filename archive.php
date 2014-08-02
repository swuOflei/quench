<?php get_header(); ?>

<div class="box archive-meta">
	<h3 class="title-meta">文章存档</h3>
</div>
<?php 

	if( have_posts() ){ 
		while ( have_posts() ){
			the_post(); 
			get_template_part( 'inc/post-format/content', get_post_format() );
		}
	}

?>

    <div class="pagination clearfix">
       <?php pagenavi($range = 3);?>
    </div>
</div></div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>