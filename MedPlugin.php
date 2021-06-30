<?php
/*
Plugin Name: MedPlugin 
Plugin URI: https://simplonline.co/
Description: from scratch plugin qui permer de gerer le footer du web site
Author: Idbihi med
Version: 1.0
Author URI: https://github.com/Mohamedidbihi/
*/

if(!defined('ABSPATH'))
{
    exit;
}

add_action("admin_menu","addMenu");

	function addMenu()
{
  // add_menu_page('Footer Text title', 'Footer Settings', 'manage_options','footer_setting_page', 'footer_text_admin_page');
    add_menu_page("MedPlugin","MedPlugin",4,"footer","examplefooter",'dashicons-admin-tools');
}
function examplefooter()
{
    include_once('footer.php');
}
function your_function() {
    echo"<footer class='bg-light text-center text-white'>
  <!-- Grid container -->
  <div class='container p-4 pb-0'>
    <!-- Section: Social media -->
    <section class='mb-4'>
      <!-- Facebook -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #3b5998;'
        href='".get_option('Facebook')."'
        role='button'
        ><i class='fab fa-facebook-f'></i
      ></a>

      <!-- Twitter -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #55acee;'
        href='".get_option('Twitter')."'
        role='button'
        ><i class='fab fa-twitter'></i
      ></a>

      <!-- Google -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #dd4b39;'
        href= href='".get_option('Gmail')."'
        role='button'
        ><i class='fab fa-google'></i
      ></a>

      <!-- Instagram -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #ac2bac;'
        href='".get_option('Instagram')."'
        role='button'
        ><i class='fab fa-instagram'></i
      ></a>

      <!-- Linkedin -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #0082ca;'
        href='".get_option('Linkedin')."'
        role='button'
        ><i class='fab fa-linkedin-in'></i
      ></a>
      <!-- Github -->
      <a
        class='btn btn-primary btn-floating m-1'
        style='background-color: #333333;'
        href='".get_option('Github')."'
        role='button'
        ><i class='fab fa-github'></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class='text-center p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
    © 2021 Copyright:
    <a class='text-white' href='facebook\sougtanii'>".get_option('Copyright')."</a>
  </div>
  <!-- Copyright -->
</footer>";
}
add_action( 'wp_footer', 'your_function' );
?>


