<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->helper(array('form', 'url'));
 }

 function index()
 {
   $this->load->view('home');
 }
 
 function checkUser(){
	 $userName = $this->input->post('username');
	$data = $this->User->checkUserName($userName);
	if($data == TRUE){
		echo $userName;
	}else if($data == FALSE){

		return FALSE;	
	}
 }
 
}

?>

