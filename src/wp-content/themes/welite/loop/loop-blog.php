<?php 
 /*
 * Loop to Load Blog Posts Based on their Formats
 */ 
?>
<?php
    if( is_home() || is_page() ) {
        global $wp_query, $paged;
        $temp = $wp_query;
        if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
        elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
        else { $paged = 1; }
        $wp_query= null;
        $wp_query = new WP_Query();
        $wp_query->query( "post_type=post&paged=". $paged );  
    }

    if (have_posts()) : while (have_posts()) : the_post();
    $format = get_post_format(); 
    
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
    endwhile; else:
?>
<?php get_template_part( 'includes/post-formats/notfound' ); ?>
<?php    
    endif; 
?>
<div class="row">
    <div class="col-sm-12">
        <?php
            get_template_part( 'includes/post-formats/post-nav' );
        ?>
    </div>
</div>
<?php
    if( is_home() || is_page() ) {
        $wp_query = null;
        $wp_query = $temp;
    }
?>