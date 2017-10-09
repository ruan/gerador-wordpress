<?php

$defaults = [
    'theme_location' => 'menu',
    'menu' => '',
    'container' => '',
    'container_class' => '',
    'container_id' => '',
    'menu_class' => 'main-menu__link',
    'menu_id' => '',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul class="main-menu' . (is_front_page() ? ' --left' : '') . '">%3$s</ul>',
    'depth' => 0,
    'walker' => new Menu(),
    'isMobile' => false,
];

wp_nav_menu($defaults);
