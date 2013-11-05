<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->contentLeft = View::instance('v_index_index');
			$this->template->contentRight = View::instance('v_users_login');
			
		# Now set the <title> tag
			$this->template->title = "Tell A Tale: your stories, tales and jokes";
	
		# CSS/JS includes
			$client_files_head = Array('/css/main.css');
	    		$this->template->client_files_head = Utils::load_client_files($client_files_head);

			/*	    
	    		$client_files_body = Array('/views/v_users_login');
	    		$this->template->client_files_body = Utils::load_client_files($client_files_body);   
			*/
	      					     		
		# Render the view
			echo $this->template;

	} # End of method
	
	
} # End of class
