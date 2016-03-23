<?php if (!defined('BASEPATH')) { exit('No direct script access allowed');}

/*
* Enter description here!!
*/
class Welcome extends Ci_Controller {

   function __construct() {
      parent::__construct();
   }

   public function index() {
      $this->load->view('welcome_message');
   }

}
