<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function is_logged_in() {
  $CI = & get_instance(); 
  $user = $CI->session->userdata('isUserLoggedIn');
  if (!isset($user)) { 
   return false; 
  } 
 else { 
   return true;
 }
} 