<?php
/* 
Plugin Name:test Plugin
Description: This is test core plugin to be used to add all the customizations.
Author: Sivapriya
Author URI:
*/

//Hooks
function test_function(){
    echo '<p style="text-align:center;">I am from test function</p>';
}
add_action('admin_enqueue_scripts','test_function');
?>