<?php
if ( function_exists( 'add_theme_support' ) ) {
    // thumbnail
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'support', 'thumbnail' );
    // thumbnail for support post type
};
register_nav_menus(
    array(
        'navbar' =>  "نوبار " ,
     )
);


 ?>
