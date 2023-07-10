<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

// download CSV file
if( isset($_GET['action']) && $_GET['action'] == 'download_csv_file' ) {
    download_csv_file_callback();
}

// CSV Callback
function download_csv_file_callback() {

    // $newsletter = Newsletter::new()->findAll()->orderBy('ID', 'DESC')->get()->toArray();
    $newsletter = (new \App\Models\Newsletter())->findAll()->orderBy('ID', 'DESC')->get()->toArray();

    // Query
    $statement = $newsletter;
    
    // file creation
    $wp_filename = "newsletter_".date("d-m-y").".csv";
    
    // Clean object
    // ob_end_clean();
    
    // Open file
    $wp_file = fopen($wp_filename,"w");
    
    // loop for insert data into CSV file
    foreach ($statement as $statementFet) {
        // $wp_array = array(
        //     "ID"    => $statementFet->ID,
        //     "email" => $statementFet->email
        // );
        $wp_array = array();
        fputcsv($wp_file, $wp_array);
    }
    
    // Close file
    fclose($wp_file);
    
    // download csv file
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=".$wp_filename);
    header("Content-Type: application/csv;");
    readfile($wp_filename);
    // exit;
    die();

}