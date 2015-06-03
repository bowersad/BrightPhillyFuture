<div class="row">
    <!-- ## masonry start ## -->
    <div id="masonry">
        <!-- ## primary content start ## -->
        <div id="primary" class="blog-masonry-3col">
            <?php
                global $wp_query, $paged;
                $temp = $wp_query;

                if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
                elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
                else { $paged = 1; }

                $posts_per_page = inafx_theme_option( 'opt_blog_masonry3col_pagesize' );
                if( is_home() || is_page() ) {
                    $wp_query = null;
                    $wp_query = new WP_Query();
                    $wp_query->query( "post_type=post&paged=". $paged ."&posts_per_page" . $posts_per_page);  
                }
                else{
                    $wp_query->set('posts_per_page', $posts_per_page);
                    $wp_query->query($wp_query->query_vars);
                }
                if (have_posts()) : while (have_posts()) : the_post();
            ?>
            <!-- ## post-masonry start ## -->
            <div class="col-md-4 col-sm-6 col-xs-12 post-masonry">
                <?php
                    $format = get_post_format(); 
                    $post_type = get_post_type();
                    if( $post_type != 'page' ) {
                        if( !is_sticky() ) {
                            if ($format == '') {
                                get_template_part( 'includes/post-formats/standard' );
                            }
                            else {
                                get_template_part( 'includes/post-formats/'.$format );
                            }
                        } else {
                            get_template_part( 'includes/post-formats/sticky' );
                        }
                    }
                    else {
                        get_template_part( 'includes/post-formats/page' );
                    }
                ?>
            </div>
            <!-- ## post-masonry end ## -->
            <?php
                endwhile; else:
            ?>
            <!-- ## post-masonry start ## -->
            <div class="col-sm-12  col-xs-12 post-masonry">
                <?php get_template_part( 'includes/post-formats/notfound' ); ?>
            </div>
            <!-- ## post-masonry end ## -->
            <?php
                endif; 
            ?>
        </div>
        <!-- ## primary content end ## -->
    </div>
    <!-- ## masonry end ## -->
</div>
<div class="row">
    <div class="col-sm-12">
        <?php
            get_template_part( 'includes/post-formats/post-nav' );
        ?>
    </div>
</div>
<?php
    $wp_query = null;
    $wp_query = $temp;
?>