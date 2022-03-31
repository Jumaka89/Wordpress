<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Travel Trip Lite
 */

get_header(); ?>

<div class="site_container">
     <div id="context_navigation">
        <div class="theme_contentarea">
            <div class="postlayout_basic">
				<?php if ( have_posts() ) : ?>
                    <header>
                        <h1 class="entry-title"><?php /* translators: %s: search term */ 
						printf( esc_html__( 'Search Results for: %s', 'travel-trip-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <?php get_template_part( 'no-results' ); ?>
                <?php endif; ?>                  
            </div><!-- postlayout_basic -->
        </div> <!-- .theme_contentarea-->        
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- site_container -->

<?php get_footer(); ?>