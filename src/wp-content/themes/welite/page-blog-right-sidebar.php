<?php
/*
Template Name: Blog Right Sidebar
*/    
?>
<?php get_header(); ?>
<!-- ## content start ## -->
<div id="content">
    <!-- ## content container start ## -->
    <div class="container">
        <div class="row">
            <!-- ## primary content start ## -->
            <div id="primary" class="col-md-8 col-sm-12 col-xs-12">
                <?php
                    get_template_part("loop/loop-blog");
                ?>
            </div>
            <!-- ## primary content end ## -->
            <!-- ## sidebar secondary content start ## -->
            <?php get_sidebar( 'content-right' ); ?>
            <!-- ## sidebar secondary content end ## -->
        </div>
    </div>
    <!-- ## content container end ## -->
</div>
<!-- ## content end ## -->
<?php get_footer(); ?>