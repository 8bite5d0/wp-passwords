<?php

if(!function_exists('wp_hash_password')):
   function wp_hash_password($password){
     return hash('sha256', $password);
   }
endif;


if(!function_exists('wp_check_password')):
    function wp_check_password($password, $hash, $user_id = '') {
        // You might want to apply the check_password filter here 
        return wp_hash_password($password) == $hash;
    }
endif;
