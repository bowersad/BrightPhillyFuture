<!-- ## logo start ## -->
<div class="logo">
    <?php if( inafx_theme_option( 'opt_logo_type' ) == 'text' ) : ?>
    <!-- ## logo-text start ## -->
    <div class="logo-text">
        <a href="<?php echo home_url( '/' ); ?>">
            <?php echo inafx_theme_option( 'opt_logo_text' ); ?>
        </a>
    </div>
    <!-- ## logo-text end ## -->
    <?php else : ?>
    <!-- ## logo-image start ## -->
    <div class="logo-image">
        <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo inafx_theme_option( 'opt_logo_image' )['url']; ?>" alt="<?php bloginfo(); ?>" />
        </a>
    </div>
    <!-- ## logo-image end ## -->
    <?php endif; ?>
</div>
<!-- ## logo end ## -->
<!-- ## nav-search start ## -->
<div class="nav-search-bar">
    <?php if (has_nav_menu('header_menu')) : ?>
    <!-- ## navbar-toggle start ## -->
    <button class="navbar-toggle" data-target="#nav-dropdown-menu1" data-toggle="collapse" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!-- ## navbar-toggle end ## -->
    <?php endif; ?>
    <?php if ( inafx_theme_option( 'opt_show_search' ) != 0 ) : ?>
    <!-- ## search link icon ## -->
    <a id="lnk-show-search" href="#_" class="fa fa-search"></a>
    <?php endif; ?>
</div>
<!-- ## nav-search end ## -->