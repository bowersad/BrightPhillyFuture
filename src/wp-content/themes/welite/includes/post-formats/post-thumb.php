<?php 
 /*
 * Load Featured Image of Post with Zoom Box effects
 */ 
?>
<?php if ( !is_attachment() ) : ?>
    <?php $format = get_post_format(); ?>
    <?php if( has_post_thumbnail() ) : ?>
        <?php
            $post_thumbnail_id = get_post_thumbnail_id( get_the_ID() ); 
            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );    
            global $fullWidth;
            if ( inafx_theme_option( 'opt_blog_layout' ) == 1 || inafx_theme_option( 'opt_blog_layout' ) == 4 || $fullWidth ) {
                $post_thumbnail = aq_resize( $post_thumbnail_url, 1140, '', true, true, true);
            }
            else {
                $post_thumbnail = aq_resize( $post_thumbnail_url, 750, '', true, true, true);
            }
        ?>
        <?php if( !is_singular() ) : ?>
            <?php if( ( 'image' == $format ) || ( 'audio' == $format ) || ( '' == $format ) ) : ?>
                <!-- ## zoom-box start ## -->
                <div class="zoom-box">
                    <!-- ## featured image start ## -->
                    <figure class="post-featured-img">
                        <img src="<?php echo $post_thumbnail; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                    </figure>
                    <!-- ## featured image end ## -->
                    <!-- ## zoom-mask start ## -->
                    <span class="zoom-mask">
                        <!-- ## zoom start ## -->
                        <span class="zoom">
                            <a class="zoom-link" href="<?php echo $post_thumbnail_url; ?>" title="<?php the_title(); ?>">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-search fa-stack-1x"></i>
                                </span>
                            </a>
                            <a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-link fa-stack-1x"></i>
                                </span>
                            </a>
                        </span>
                        <!-- ## zoom end ## -->
                        <!-- ## zoom-mask end ## -->
                    </span>
                </div>
                <!-- ## zoom-box end ## -->
            <?php else :?>
            <?php 
                if( ( 'quote' == $format ) || ( 'link' == $format ) ) : 
                    echo $post_thumbnail_url;
                elseif ( 'gallery' == $format ) :
                    inafx_the_attachment();
                endif;
            ?>
            <?php endif; ?>
        <?php else :?>
            <?php if( ( 'image' == $format ) || ( 'audio' == $format ) || ( '' == $format ) ) : ?>
                <!-- ## zoom-box start ## -->
                <div class="zoom-box">
                    <!-- ## featured image start ## -->
                    <figure class="post-featured-img">
                        <img src="<?php echo $post_thumbnail; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                    </figure>
                    <!-- ## featured image end ## -->
                    <!-- ## zoom-mask start ## -->
                    <span class="zoom-mask">
                        <!-- ## zoom start ## -->
                        <span class="zoom">
                            <a class="zoom-link" href="<?php echo $post_thumbnail_url; ?>" title="<?php the_title(); ?>">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-search fa-stack-1x"></i>
                                </span>
                            </a>
                        </span>
                        <!-- ## zoom end ## -->
                    </span>
                    <!-- ## zoom-mask end ## -->
                </div>
                <!-- ## zoom-box end ## -->
            <?php else :?>
            <?php 
                if( ( 'quote' == $format ) || ( 'link' == $format ) ) : 
                    $post_thumbnail_id = get_post_thumbnail_id( get_the_ID() ); 
                    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                    echo $post_thumbnail_url;
                elseif ( 'gallery' == $format ) :
                    inafx_the_attachment();
                endif;
            ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php 
    else :
        if ( 'gallery' == $format ) :
            inafx_the_attachment();
        endif;
    ?>
    <?php endif; ?>
<?php else : ?>
    <?php inafx_attachment(); ?>
<?php endif; ?>