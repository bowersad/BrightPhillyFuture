<?php
/*
Template Name: Blog Masonry 2 Columns Right Sidebar
*/    
?>
<?php get_header(); ?>
<!-- ## content start ## -->
<div id="content">
    <!-- ## content container start ## -->
    <div class="container">
        <div class="row">
            <div id="masonry">
                <?php
                    get_template_part("loop/loop-blog2-right-sidebar");
                ?>

                <!-- ## sidebar secondary content start ## -->
                <?php get_sidebar( 'content-right' ); ?>
                <!-- ## sidebar secondary content end ## -->
            </div>
        </div>
    </div>
    <!-- ## content container end ## -->
</div>
<!-- ## content end ## -->
<?php get_footer(); ?>