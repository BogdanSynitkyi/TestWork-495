<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap','mmenu-light' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION








add_action ('woocommerce_product_options_general_product_data', function(){ 
	?>
<div class="options_group">
	<?php
	$argum = array('id'      => 'select_group',
   								'label'   => 'Выпадающий список',
								'options' => array(
								'rare'   => __( 'rare', 'woocommerce' ),
								'frequent'   => __( 'frequent', 'woocommerce' ),
								'unusual' => __( 'unusual', 'woocommerce' ),),	
							);
woocommerce_wp_select($argum);
   
   ?>
   </div>

   <?php	
} );

add_action( 'woocommerce_process_product_meta', function($post_id){
	$product = wc_get_product($post_id);
	$text_field = isset($_POST['select_group'])? sanitize_text_field($_POST['select_group']):'';
	$product -> update_meta_data('select_group', $text_field);
	$product ->save();
	}, 10, 1 );




add_action( 'woocommerce_after_add_to_cart_form', function()  {
	$product = wc_get_product();

	 ?>
	<br/><div><b>
	<?php
	echo $product->get_meta( 'select_group', true );
	?>
	 </b></div>
	 <?php

}

);


//________________________________________________________________________________________________________________________________




add_action ('woocommerce_product_options_general_product_data', function() {
	?>
	<div class="options_group">
		<?php

		
			woocommerce_wp_text_input( array(
				'id'           => 'custom_text_field',
				'label'        => 'Приклад текстового поля',
				'placeholder'  => 'Текстове поле',
				'desc_tip'     => 'true',
				'description'  =>__('Введіть значення поля', 'woocommerce'),)
			); 
	?>
	<div>
		
		<?php
});


	add_action( 'woocommerce_process_product_meta', function($post_id){
	$product = wc_get_product($post_id);
	$text = isset($_POST['custom_text_field'])? sanitize_text_field($_POST['custom_text_field']):'';
	$product-> update_meta_data('custom_text_field', $text);
	$product->save();
	}, 10, 1 );



add_action( 'woocommerce_before_add_to_cart_form', function()  {
	$product = wc_get_product();
	 ?>
	<br/><div><b>
	<?php
	echo $product->get_meta( 'custom_text_field', true );
	?>
	 </b></div>
	 <?php

}

);



//________________________________________________________________________________________________________________________________



add_action ('woocommerce_product_options_general_product_data', function() {
	?>
	<div class="options_group">
		<?php

		
		woocommerce_wp_radio( array(
   'id'            => 'radio_button',
   'label'         => 'Радіокнопки',
   'class'         => 'radio-field', // Произвольный класс поля
   'style'         => '', // Произвольные стили для поля
   'wrapper_class' => 'wrap-radio', // Класс обертки поля
   'desc_tip'      => 'true', // Включение подсказки
   'description'   => 'Выберите значение',// Описение поля
   'name'          => 'radio-field', // Имя поля
   'options'       => array(
      'Оптом'   => 'Оптом',
      'В роздріб'   => 'В роздріб',
      'Оптом і в роздріб' => 'Оптом і в роздріб',
   ),
) );

	?>
	<div>
		<?php
});



add_action( 'woocommerce_process_product_meta', function($post_id){
	$product = wc_get_product($post_id);
	$radio_field = isset( $_POST['radio-field'] ) ? sanitize_text_field( $_POST['radio-field'] ) : '';
	$product->update_meta_data( 'radio_button', $radio_field );
	$product->save();
	}, 10, 1 );




add_action( 'woocommerce_before_add_to_cart_form', function()  {
	$product = wc_get_product();
	 ?>
	<div><b>
	<?php
	 echo $product->get_meta( 'radio_button', true );
	 ?>
	 </b></div><br/>
	 <?php
}

);




	

 