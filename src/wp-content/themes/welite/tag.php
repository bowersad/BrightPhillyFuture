<?php get_header(); ?>
<!-- ## content start ## -->
<div id="content">
    <!-- ## content container start ## -->
    <div class="container">
        <?php
            if ( inafx_theme_option( 'opt_blog_layout' ) == 4 ) :
                get_template_part("loop/loop-blog3");
            else :
        ?>
        <div class="row">
            <?php if ( inafx_theme_option( 'opt_blog_layout' ) == 1 ) : ?>
            <!-- ## primary content start ## -->
            <div id="primary" class="col-sm-12 col-xs-12">
                <?php
                    get_template_part("loop/loop");
                ?>
            </div>
            <!-- ## primary content end ## -->
            <?php endif; ?>

            <?php if ( inafx_theme_option( 'opt_blog_layout' ) == 2 || inafx_theme_option( 'opt_blog_layout' ) == 3 ) : ?>
            <!-- ## primary content start ## -->
            <div id="primary" class="col-md-8 col-sm-12 col-xs-12<?php echo ( inafx_theme_option( 'opt_blog_layout' ) == 2 ) ? ' pull-right' : '';?>">
                <?php
                    get_template_part("loop/loop");
                ?>
            </div>
            <!-- ## primary content end ## -->
            <!-- ## sidebar secondary content start ## -->
            <?php get_sidebar( 'content' ); ?>
            <!-- ## sidebar secondary content end ## -->
            <?php endif; ?>

            <?php if ( inafx_theme_option( 'opt_blog_layout' ) == 5 || inafx_theme_option( 'opt_blog_layout' ) == 6 ) : ?>
            <!-- ## masonry layout start ## -->
            <div id="masonry">
                <?php get_template_part("loop/loop-blog2"); ?>

                <!-- ## sidebar secondary content start ## -->
                <?php get_sidebar( 'content' ); ?>
                <!-- ## sidebar secondary content end ## -->
            </div>
            <!-- ## masonry layout end ## -->
            <?php endif; ?>
        </div>
        <?php
            endif; 
        ?>
    </div>
    <!-- ## content container end ## -->
</div>
<!-- ## content end ## -->
<?php get_footer(); ?>