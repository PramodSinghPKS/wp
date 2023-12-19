<?php
add_action('after_setup_theme', 'theme_setup');
function theme_setup() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}

function home_body_class($classes) {
    if(get_post_type() == "works" || is_404()) {
        $classes[] = 'ma__dark';
    }
    return $classes;
}
add_filter("body_class", "home_body_class");

?>