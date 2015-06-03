<?php get_header(); ?>
<!-- ## content start ## -->
<div id="content">
    <!-- ## content container start ## -->
    <div class="container">
        <div class="row">
            <!-- ## primary content start ## -->
            <div id="primary" class="col-md-8 col-sm-12 col-xs-12<?php echo ( inafx_theme_option( 'opt_blog_layout' ) == 2 || inafx_theme_option( 'opt_blog_layout' ) == 5 ) ? ' pull-right' : '';?>">
                <?php
                    get_template_part("loop/loop-attachment");
                ?>
            </div>
            <!-- ## primary content end ## -->
            <!-- ## sidebar secondary content start ## -->
            <?php get_sidebar( 'content' ); ?>
            <!-- ## sidebar secondary content end ## -->
        </div>
    </div>
    <!-- ## content container end ## -->
</div>
<!-- ## content end ## -->
<?php get_footer(); ?>