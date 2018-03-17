<?php
/**
 * Created by PhpStorm.
 * User: Johan
 * Date: 3/17/2018
 * Time: 6:19 PM
 */
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

debug_to_console( "Test" );