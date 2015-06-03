<?php
/*
Template Name: Blog Masonry 2 Columns Left Sidebar
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
                    get_template_part("loop/loop-blog2-left-sidebar");
                ?>

                <!-- ## sidebar secondary content start ## -->
                <?php get_sidebar( 'content-left' ); ?>
                <!-- ## sidebar secondary content end ## -->
            </div>
        </div>
    </div>
    <!-- ## content container end ## -->
</div>
<!-- ## content end ## -->
<?php get_footer(); ?>