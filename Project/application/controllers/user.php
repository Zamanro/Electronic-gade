<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
function __construct()
 {
	   parent::__construct();
	   $this->checkStatus();
 }

function index()
{  	  //// ฟังชั่นในการเรียกใช้งานครั้งแรก 
		$loginData['loginData'] = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
 		$this->load->view('home_user',$loginData); //// ส่งข้อมูล loginData ที่อยู่ใน session พร้อมกับ loadview ชื่อ home_user

 }
 
 function checkStatus()
 { 
	 $session_data = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
	 $status = $session_data['teacherStatus'];/// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
	 if($status!="teacher"){
		 
	 }//เช็คค่า $satus ว่าเป็น user หรือไม่ ถ้าไม่ให้ทำตาม Process
		   
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
		$this->load->view('addteacher');	
	}
	 function addview2()
	{
		$this->load->view('dostudent');	
	}
	
	
function show()
	{
	$data['showteacher'] = $this->teacher->getalldata();
	$this->load->view('Showteacher' ,$data);	

	}
	
function showstudent()
	{
	$data['showstudent'] = $this->student->getalldata();
	$this->load->view('Showstudent' ,$data);	

	}
	

function getpkdata($studentId)
	{
		
		
		$this->student->setStudentId($studentId);
		$data['showall']=$this->student->getpkdata();
		$this->load->view('Editstudent',$data);
		
	}
		
function update()
	{
		$studentId = $this->input->post('studentId');
		$studentCode = $this->input->post('studentCode');
		$studentName = $this->input->post('studentName');
		$studentLname = $this->input->post('studentLname');
		$studentAddress = $this->input->post('studentAddress');
		
		
		
		$this->student->setStudentId($studentId);
		$this->student->setStudentCode($studentCode);
		$this->student->setStudentName($studentName);
		$this->student->setStudentLname($studentLname);
		$this->student->setStudentAddress($studentAddress);
		
		$id=$this->student->update();
		
		
		
		
	}
	
	function deletedata($studentId)
{
	$this->student->setStudentId($studentId);
	$this->student->deletedata();
	
	
	
	echo "สำเร็จแล้วครับ";

}

function searchdata($xxx)
	{
	$data['showteacher'] = $this->teacher->searchdata($xxx);
	$this->load->view('Showteacher' ,$data);	

	}
	

	
 }

?>