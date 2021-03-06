<?php 


/**
 *  @package HepekPlugin
 */

 namespace Inc\Base;

 class SettingsLink{

    protected $plugin;

    public function __construct(){
        // PLUGIN IS CONSTANT THAT WE DECLARE IN heek-plugin.php file
        $this->plugin = PLUGIN;  
    }

    public function register(){
      // add_filter('plugin_action_link_hepek-plugin', array($this, 'settings_link'));
       add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));  // funkcija radi isto kao i prethodna
    }

     public function settings_link( $links ){
         $settings_link = '<a href="options-general.php?page=hepek_plugin">Settings</a>';
         array_push( $links , $settings_link );
       
         return $links;
    }


 }