<?php
/*
Template Name: Page Full Width
*/
?>
<?php get_header(); ?>
<!-- ## content start ## -->
<div id="content">
    <!-- ## content container start ## -->
    <div class="container">
        <div class="row">
            <!-- ## primary content start ## -->
            <div id="primary" class="col-sm-12 col-xs-12">
                <?php
                    global $fullWidth;
                    $fullWidth = true;                    
                    get_template_part("loop/loop-page");
                ?>
            </div>
            <!-- ## primary content end ## -->
        </div>
    </div>
    <!-- ## content container end ## -->
</div>
<!-- ## content end ## -->
<?php get_footer(); ?>