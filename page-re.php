<?php
/*
 * Template Name: Rechtsanwält Page
 */
get_header(); 

?>
    <section id="main" class="clearfix">
        <div id="page" class="container">
            <div id="content" class="site-content" role="main">

                <?php while ( have_posts() ): the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <h2 class="entry-title"><?php the_title(); ?></h2>

                        <div class="entry-content col-md-8">
                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
        $image = $image[0]; ?>
        
        
        <div class="headshot col-lg-5 col-md-6 col-sm-4 col-xs-12 "><img src="<?php echo $image; ?>" alt="'<?php the_title(); ?>'" class="img-responsive" /></div>
        
    <?php endif; ?>
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
                        <?php dynamic_sidebar( 'sidebar' ); ?>
                    </aside>
                </div>
            </div> <!-- #sidebar --><!--/#content-->
            </div>


        </div>
    </section> <!--/#page-->

<?php get_footer();