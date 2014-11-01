<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User1 extends CI_Controller {
function __construct()
 {
	   parent::__construct();
	   $this->checkStatus();
 }

function index()
{  	  //// ??????????????????????????????? 
		$loginData['loginData'] = $this->session->userdata('loginData'); /// ?????????????????? session ???? loginData
 		$this->load->view('home_user',$loginData); //// ????????? loginData ????????? session ???????? loadview ???? home_user

 }
 
 function checkStatus()
 { 
	 $session_data = $this->session->userdata('loginData'); /// ?????????????????? session ???? loginData
	 $status = $session_data['teacherStatus'];/// ??????????? array session_data ???? status ??????? $satus
	 if($status!="teacher"){
		 
	 }//??????? $satus ??????? user ??????? ?????????????? Process
		   
	 }
	 
	 function add()
	 {
		$teacherName = $this->input->post('teacherName');
		$teacherLname = $this->input->post('teacherLname');
		$teacherAddress = $this->input->post('teacherAddress');
		$teacherEmail = $this->input->post('teacherEmail');
		$teacherPhone = $this->input->post('teacherPhone');
		$teacherUser = $this->input->post('teacherUser');
		$teacherPassword = $this->input->post('teacherPassword');
		$teacherStatus = $this->input->post('teacherStatus');
		
		var_dump($_POST);
		
		$this->teacher->setTeacherName($teacherName);
		$this->teacher->setTeacherLname($teacherLname);
		$this->teacher->setTeacherAddress($teacherAddress);
		$this->teacher->setTeacherEmail($teacherEmail);
		$this->teacher->setTeacherPhone($teacherPhone);
		$this->teacher->setTeacherUser($teacherUser);
		$this->teacher->setTeacherPassword($teacherPassword);
		$id=$this->teacher->add();
		
		echo $id;
		
	}	 
	 function addview()
	{
		$this->load->view('addstudent');	
	}
 }

?>