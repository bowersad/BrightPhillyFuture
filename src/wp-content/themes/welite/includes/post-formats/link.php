<?php $link_url = get_post_meta(get_the_ID(), 'inafx_link_url', true); ?>
<!-- ## post start ## -->
<article id="post-<?php the_ID(); ?>" <?php post_class( array('post') ); ?>>
    <!-- ## post-link start ## -->
    <div class="row post-link">
        <div class="col-sm-12">
            <!-- ## entry-link start ## -->
            <a class="entry-link" href="<?php echo $link_url; ?>" target="_blank">
                <!-- ## entry-bg start ## -->
                <div class="entry-bg" style="background-image: url(<?php get_template_part('includes/post-formats/post-thumb'); ?>);">
                    <!-- ## entry-overlay start ## -->
                    <div class="entry-overlay">
                        <p><?php inafx_the_attachment(); ?></p>
                    </div>
                    <!-- ## entry-overlay end ## -->
                </div>
                <!-- ## entry-bg end ## -->
            </a>
            <!-- ## entry-link end ## -->
        </div>
    </div>
    <!-- ## post-link end ## -->
    <!-- ## post-entry start ## -->
    <div class="row post-entry">
        <!-- ## title start ## -->
        <div class="col-sm-12">
            <?php get_template_part('includes/post-formats/post-title'); ?>
        </div>
        <!-- ## title end ## -->
        <!-- ## entry-meta start ## -->
        <div class="col-sm-12 entry-meta">
            <?php get_template_part('includes/post-formats/entry-sticky'); ?>
            <?php get_template_part('includes/post-formats/entry-type'); ?>
            <?php get_template_part('includes/post-formats/entry-author'); ?>
            <?php get_template_part('includes/post-formats/entry-date'); ?>
            <?php get_template_part('includes/post-formats/entry-comments'); ?>
            <?php get_template_part('includes/post-formats/entry-categories'); ?>
        </div>
        <!-- ## entry-meta end ## -->
        <?php get_template_part('includes/post-formats/post-content'); ?>
        <?php get_template_part('includes/post-formats/entry-tags'); ?>
    </div>
    <!-- ## post-entry end ## -->
    <?php get_template_part( 'includes/post-formats/social-buttons'); ?>
</article>
<!-- ## post end ## -->