<?php

/* add parent theme css */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/* replace top rescent post widget title */
add_filter( 'cpc_top_widget_title', 'replace_cpc_widget_title' );

function replace_cpc_widget_title( $title_new ) {
	if ( is_home() || is_front_page() ) {
		$title_new = '<img src="' . get_stylesheet_directory_uri() . '/images/news.svg" alt="画像: お知らせ・新着情報">';
	}
	return $title_new;
}
