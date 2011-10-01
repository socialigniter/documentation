<?php
class Documentation extends Site_Controller
{
    function __construct()
    {
        parent::__construct();       
	}
	
	function index()
	{
		$this->data['page_title'] = 'Documentation';
		$this->render();	
	}

	function view() 
	{		
		// Basic Content Redirect	
		$this->render();
	}
	
}
