<!-- ## post start ## -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- ## post-quote start ## -->
    <div class="row post-quote">
        <div class="col-sm-12">
            <!-- ## entry-link start ## -->
            <a class="entry-link" href="<?php echo (( !is_singular() )  ? get_the_permalink() : '#_'); ?>">
                <!-- ## entry-bg start ## -->
                <div class="entry-bg" style="background-image: url(<?php get_template_part('includes/post-formats/post-thumb'); ?>);">
                    <!-- ## entry-overlay start ## -->
                    <div class="entry-overlay">
                        <?php inafx_the_attachment(); ?>
                    </div>
                    <!-- ## entry-overlay end ## -->
                </div>
                <!-- ## entry-bg end ## -->
            </a>
            <!-- ## entry-link end ## -->
        </div>
    </div>
    <!-- ## post-quote end ## -->
</article>
<!-- ## post end ## -->