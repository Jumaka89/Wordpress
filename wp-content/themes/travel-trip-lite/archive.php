<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Travel Trip Lite
 */

get_header(); ?>

<div class="site_container">
    <div id="context_navigation">
        <div class="theme_contentarea">
			<?php if ( have_posts() ) : ?>
                <header class="page-header">
                <?php
                the_archive_title( '<h1 class="entry-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?> 
                </header><!-- .page-header -->
                <div class="postlayout_basic">
					<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content' ); ?>
                        <?php endwhile; ?>                   
                </div>
            <?php the_posts_pagination(); ?>
            <?php else : ?>
            <?php get_template_part( 'no-results' ); ?>
            <?php endif; ?>
        </div><!-- theme_contentarea-->   
        <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- site_container -->
	
<?php get_footer(); ?>