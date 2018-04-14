<?php
/**
 * @package Maine-mussels-managerPlugin
 */

 /*
    Plugin Name: Maine Mussels Manager
    Plugin URI: http://mainemusselslax.com
    Description: Plugin for Maine Mussels Lacrosse Team Management
    Version: 1.0.0
    Author: Phil Patterson
    Author URI: http://philpatterson.io
    Text Domain: maine-mussels-manager-plugin
 */

 if (! defined( 'ABSPATH')){
     die;
 }

 class MaineMusselsManagerPlugin
 {
    function activate(){
        echo "Plugin was activated";
    }
    function deactivate(){
        echo "Plugin was deactivated";        
    }
    function uninstall(){
        
    }
 }

if ( class_exists('MaineMusselsManagerPlugin')){
    $mainemusselsmanagerPlugin = new MaineMusselsManagerPlugin();
} 

// activation

register_activation_hook( __FILE__, array($mainemusselsmanagerPlugin, 'activate') );

// deactivation

register_deactivation_hook( __FILE__, array($mainemusselsmanagerPlugin, 'deactivate') );

// uninstall

