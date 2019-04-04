<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//

     register_sidebar( array(
     'name' => __('Contact-info' , 'twentysixteen'),
     'id'   => 'Contact-info',
     'description' => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
     'before_widget' => '<section id="%1$s" class="widget %2$s">',
	 'after_widget'  => '</section>',
	 'before_title'  => '<h2 class="widget-title">',
	 'after_title'   => '</h2>',
     )
    );
     register_sidebar( array(
     'name' => __('footer-left' , 'twentysixteen'),
     'id'   => 'footer-left',
     'description' => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
     'before_widget' => '<section id="%1$s" class="widget %2$s">',
	 'after_widget'  => '</section>',
	 'before_title'  => '<h2 class="widget-title">',
	 'after_title'   => '</h2>',
     )
    );
     register_sidebar( array(
     'name' => __('footer-main' , 'twentysixteen'),
     'id'   => 'footer-main',
     'description' => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
     'before_widget' => '<section id="%1$s" class="widget %2$s">',
	 'after_widget'  => '</section>',
	 'before_title'  => '<h2 class="widget-title">',
	 'after_title'   => '</h2>',
     )
    );

     register_sidebar( array(
     'name' => __('footer-right' , 'twentysixteen'),
     'id'   => 'footer-right',
     'description' => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
     'before_widget' => '<section id="%1$s" class="widget %2$s">',
	 'after_widget'  => '</section>',
	 'before_title'  => '<h2 class="widget-title">',
	 'after_title'   => '</h2>',
     )
    );

          register_sidebar( array(
     'name' => __('footer-copyright' , 'twentysixteen'),
     'id'   => 'footer-copyright',
     'description' => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
     'before_widget' => '<section id="%1$s" class="widget %2$s">',
	 'after_widget'  => '</section>',
	 'before_title'  => '<h2 class="widget-title">',
	 'after_title'   => '</h2>',
     )
    );
