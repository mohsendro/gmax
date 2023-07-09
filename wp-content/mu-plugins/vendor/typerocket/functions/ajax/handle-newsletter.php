<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

// WP Ajax: newsletter-ajax-handle - هندل عضویت در خبرنامه

function newsletter_ajax_handle_function() {

    check_ajax_referer( 'newsletter_form_nonce', 'submitted_nonce' );  // This function will die if submitted_nonce is not correct.

    $newsletter = new App\Models\Newsletter();
    $check = $newsletter->first()->where('email', '=', sanitize_text_field($_POST['newsLetterInput']))->get();

    if( $check ) {
        $status = false;
    } else {
        $newsletter->email = sanitize_text_field($_POST['newsLetterInput']);
        $newsletter->save(); 
        $status = true;
    }
    
    $response = array(
        'status' => $status,
    );

    wp_send_json_success( $response, 200 );
    wp_send_json_error();
    wp_die();

}
// add_action( 'wp_ajax_nopriv_newsletter_ajax_handle', 'newsletter_ajax_handle_function' );
add_action( 'wp_ajax_newsletter_ajax_handle', 'newsletter_ajax_handle_function' );  // For logged in users.



function newsletter_export_ajax_handle_function() {

    check_ajax_referer( 'newsletter_form_nonce', 'submitted_nonce' );  // This function will die if submitted_nonce is not correct.

    $export = new \App\Controllers\NewsletterController;
    $export = $export->export();

    $response = array(
        'status' => true,
        'data'   => $export
    );

    wp_send_json_success( $response, 200 );
    wp_send_json_error();
    wp_die();

}
add_action( 'wp_ajax_nopriv_newsletter_export_ajax_handle', 'newsletter_export_ajax_handle_function' );
add_action( 'wp_ajax_newsletter_export_ajax_handle', 'newsletter_export_ajax_handle_function' );  // For logged in users.