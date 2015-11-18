<?php

class Wordpres_Plugin_Skeleton {

	
	public $plugin_path;
	public $plugin_url;

	
	public function __construct($plugin_path, $plugin_url) {
		$this->plugin_path = $plugin_path;
		$this->plugin_url = $plugin_url;
		
		// hooks
		add_action('init', array($this, 'sample_function'));
	}

	
	
	
  /**
   * Actions to execute at plugin activation
   */
  public static function activate() {
  	
  }

  
  
  
  /**
   * Azioni da eseguire alla disattivazione del plugin
   */
  public static function deactivate() {
  	
  }



  /**
   * Sample function
   */
  public function sample_function() {

  }
	
	
  
}