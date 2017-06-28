<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="blog-single">

        <div class="col-sm-2">
            <div class="entry-meta text-center">
                <?php echo get_avatar( get_the_author_meta('user_email'), $size = '50'); ?>
                <h2><?php the_author_posts_link() ?></h2>
                <hr>
                <span><i class="fa fa-eye"></i> <?php echo post_view_count(get_the_ID()); // dont-delete ?> </span>
                <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
                <span class="comments-number"> <i class="fa fa-comments-o"></i> <?php comments_popup_link( '<span class="leave-reply">' . __( '0', 'themeum' ) . '</span>', __( '1', 'themeum' ), __( '%', 'themeum' ) ); ?></span>
                <?php endif; //.comment-link ?>
            </div>
        </div>
            
        <div class="col-sm-10">
            <div class="blog-content">
                <div class="no-image">
                    <span class="date"><?php the_time('M'); ?><span><?php the_time('d'); ?></span></span>
                </div>

                <div class="post-chat">

                <?php $chat_text = rwmb_meta( 'thm_chat_text' ); ?>

                <?php if($chat_text != ''): ?>
                    <div class="entry-chat">
                        <?php echo $chat_text; ?>
                    </div>
                <?php endif; ?>

                </div>
                 <header class="entry-header">
                        <h3 class="entry-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                            <?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
                            <sup class="featured-post"><?php _e( 'Sticky', 'themeum' ) ?></sup>
                            <?php } ?>
                        </h3> <!-- //.entry-title -->
                </header>    
                 <div class="post-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                </div>

               <?php the_tags( '<div class="tag-meta"><span class="tag-links"><i class="fa fa-tags"></i> ', ' ', '</span></div>' ); ?>
            
                <div  id="author" class="media commnets">
                    <div class="pull-left">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                    </div>
                    <div class="media-body">
                    <h4 class="media-heading"><?php echo get_the_author_link(); ?></h4>
                    <p><?php the_author_meta('description'); ?></p>
                    </div>
                </div> <!-- .post-author -->

                <div class="clearfix post-navigation">
                    <?php previous_post_link('<span class="previous-post pull-left btn btn-style">%link</span>','<i class="fa fa-long-arrow-left"></i> previous article'); ?>
                     <?php next_post_link('<span class="next-post pull-right btn btn-style">%link</span>','next article <i class="fa fa-long-arrow-right"></i>'); ?>
                </div> <!-- .post-navigation -->
                
                <div class="response-area">
                    <?php
                        if ( comments_open() || get_comments_number() ) {
                                comments_template();
                        }
                    ?>                  
                </div><!--/Response-area-->
            </div><!--/.blog-content-->
        </div>

    </div><!--/.blog-item-->

</article> <!--/#post-->
