<?php function gcc_starter_kit_main_navigation() {
        
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => '',
        'items_wrap' => '

        <ul id="%1$s" class="navbar-nav mr-auto">%3$s</ul>
        
        ' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => 'primary-menu',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
        'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
    ));
}
function gcc_starter_kit_quicklinks_navigation() {
        
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => '',
        'items_wrap' => '

        <ul id="%1$s" class="navbar-nav mr-auto" data-dropdown-menu>%3$s</ul>
        
        ' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => 'quicklinks-menu',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
           'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
    ));
}