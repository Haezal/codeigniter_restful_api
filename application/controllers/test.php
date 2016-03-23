<?php if (!defined('BASEPATH')) { exit('No direct script access allowed');}

/*
* Enter description here!!
*
* -------------------NOTE-------------------
* HTTP CODE 
* 200 = OK
* 404 = Page not found
* 500 = Internal server error
* 
* More http code here https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
*/

require(APPPATH.'/libraries/REST_Controller.php');

class Test extends REST_Controller
{
	/**
	* Get 
	*/
	function index_get()
    {
        // respond with information about a anything
        $data = array('returned: '. $this->get('id'));
        $this->response($data);
    }
}