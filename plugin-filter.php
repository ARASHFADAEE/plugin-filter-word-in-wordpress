<?php

/*
Plugin Name: filter comment 
Plugin URI: https://hosseindev.ir
Description: This plugin is designed to filter swearing and inappropriate texts, and by activating it, your comments will be filtered
Version: 1.0.0
Requires PHP: 7.3
Author: Hossein Fadaee (Arash Fadaee)
Author URI: https://hosseindev.ir

*/



define('path', plugin_dir_path(__FILE__) );
include_once path."/inc/const.php";



function active_filter_plugin(){



}


register_activation_hook( __FILE__, 'active_filter_plugin' );


register_deactivation_hook(__FILE__, 'deactive_filter_plugin');



if (is_admin( )){
    include_once path."/inc/admin/menu.php";
}else{
    include_once path."/inc/user/menus.php";

}


define('path1', __DIR__);


echo path1;