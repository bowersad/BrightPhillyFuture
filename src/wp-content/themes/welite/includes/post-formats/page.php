<!-- ## page start ## -->
<article id="page-<?php the_ID(); ?>" <?php post_class( array('page') ); ?>>
    <?php get_template_part('includes/post-formats/post-thumb'); ?>
    <!-- ## post-entry start ## -->
    <div class="row post-entry">
        <!-- ## title start ## -->
        <div class="col-sm-12">
            <?php get_template_part('includes/post-formats/post-title'); ?>
        </div>
        <!-- ## title end ## -->
        <?php get_template_part('includes/post-formats/post-content'); ?>
    </div>
    <!-- ## post-entry end ## -->
</article>
<!-- ## page end ## -->