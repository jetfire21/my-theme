<?php

register_nav_menus( array(
  'header_location' => 'menu_cat_header'
) );


/*
 * Removes products count after categories name 
 */
add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );
 
function woo_remove_category_products_count() {
  return;
}


register_sidebar(
         array(
          'name' => 'Меню категорий',
          'id' => 'menu_cat',
          'description' => 'Блоки которые будут выводиться внизу страницы',
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '',
          'after_title' => ''
        ) 
 );



// Override WooCommerce Widgets

add_action( 'widgets_init', 'override_woocommerce_widgets', 15 );
 
function override_woocommerce_widgets() {
  // Ensure our parent class exists to avoid fatal error (thanks Wilgert!)
 
  if ( class_exists( 'WC_Widget_Product_Categories' ) ) {
    unregister_widget( 'WC_Widget_Product_Categories' );
 
    // include_once( 'widgets/widget-best_sellers.php' );
    // include_once( get_template_directory_uri().'/widgets/class-wc-widget-product-categories.php' );
    include_once('widgets/class-wc-widget-product-categories.php' );
 
    register_widget( 'WC_Widget_Product_Categories_My' );
  }
 
}

// Override WooCommerce Widgets

  register_nav_menus( array(
    'top_bar'   => "top_nav",
  ) );

  /* Отключаем админ панель для всех пользователей. */
  show_admin_bar(false);

?>