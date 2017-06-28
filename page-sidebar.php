<?php
/*
 * Template Name: Sidebar Layout
 */
get_header(); 

?>

<?php get_header(); ?>

    <section id="main" class="clearfix">
        <div id="page" class="container">
            <div id="content" class="site-content" role="main">
                <?php /* The loop */ ?>
                <?php while ( have_posts() ): the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <h2 class="entry-title"><?php the_title(); ?></h2>

                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php endif; ?>

                        <div class="entry-content col-md-8">
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                        </div>

                    </article>

                    <?php // comment_template(); ?>

                <?php endwhile; ?>
                
            </div>
            
                        <div id="sidebar" class="col-md-4" role="complementary">
                <div class="sidebar-inner">
                    <aside class="widget-area">
                        <?php MS_dynamic_sidebar();?>
                    </aside>
                </div>
            </div> <!-- #sidebar --><!--/#content-->



        </div>
    </section> <!--/#page-->

<?php get_footer();

