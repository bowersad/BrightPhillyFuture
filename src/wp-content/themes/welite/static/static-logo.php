<!-- ## logo start ## -->
<div class="logo">
    <?php if( inafx_theme_option( 'opt_logo_type' ) == 'text' ) : ?>
    <div class="row">    
        <div class="col-md-6">
        <!-- ## logo-text start ## -->
        <div class="logo-text">
            <a href="<?php echo home_url( '/' ); ?>">
                <?php echo inafx_theme_option( 'opt_logo_text' ); ?>
            </a>
        </div>
        </div> 
        <div class="col-md-6  hidden-sm hidden-xs">
            <div class="logo-text social-icon">
                <a href="http://www.facebook.com/BrightPhillyFuture"><i class="fa fa-2x fa-facebook"></i></a>
                <a href="http://www.twitter.com/BrightPhillyFuture"><i class="fa fa-2x fa-twitter"></i></a>
                <a href="http://www.instagram.com/BrightPhillyFuture"><i class="fa fa-2x fa-instagram"></i></a>
            </div>
        </div>              
    </div>
    <div class="row">            
        <div class="col-md-6 hidden-sm hidden-xs">
        <div class="logo-text tagline-text">
            <a href="<?php echo home_url( '/' ); ?>">
                <?php bloginfo('description') ?>            
            </a>
        </div>
        </div>    
        <div class="col-md-6 hidden-sm hidden-xs">
            <div id="email-form">
            <form action="//brightphillyfuture.us11.list-manage.com/subscribe/post?u=aa9760609c593013770042701&amp;id=a3a75fe3ca" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="email-form">
                <label>Get Involved</label>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_aa9760609c593013770042701_a3a75fe3ca" tabindex="-1" value=""></div>
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                </div>
            </form>
            </div>
        </div>
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
    <?php if ( inafx_theme_option( 'opt_show_search' ) == 0 ) : ?>
    <!-- ## search link icon ## -->
    <a id="lnk-show-search" href="#_" class="fa fa-search"></a>
    <?php endif; ?>
</div>
<!-- ## nav-search end ## -->