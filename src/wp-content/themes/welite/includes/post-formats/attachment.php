<!-- ## post start ## -->
<article id="post-<?php the_ID(); ?>" <?php post_class( array('post') ); ?>>
    <?php get_template_part('includes/post-formats/post-thumb'); ?>
    <!-- ## post-entry start ## -->
    <div class="row post-entry">
        <!-- ## title start ## -->
        <div class="col-sm-12">
            <?php get_template_part('includes/post-formats/post-title'); ?>
        </div>
        <!-- ## title end ## -->
        <!-- ## entry-meta start ## -->
        <div class="col-sm-12 entry-meta">
            <?php get_template_part('includes/post-formats/entry-type'); ?>
            <?php get_template_part('includes/post-formats/entry-author'); ?>
            <?php get_template_part('includes/post-formats/entry-date'); ?>
            <?php get_template_part('includes/post-formats/entry-comments'); ?>
            <?php get_template_part('includes/post-formats/entry-categories'); ?>
        </div>
        <!-- ## entry-meta end ## -->
        <?php get_template_part('includes/post-formats/post-attachment'); ?>
        <!-- ## entry-meta-tags start ## -->
        <div class="col-sm-12 entry-meta-tags">
            <?php get_template_part('includes/post-formats/entry-tags'); ?>
        </div>
        <!-- ## entry-meta-tags end ## -->
    </div>
    <!-- ## post-entry end ## -->
    <?php get_template_part( 'includes/post-formats/social-buttons'); ?>
</article>
<!-- ## post end ## -->