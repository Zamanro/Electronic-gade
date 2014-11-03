<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class CheckLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {  
 	$username =  $this->input->post('username'); /// รับค่า input ชื่อ username
	$password =  $this->input->post('password');/// รับค่า input ชื่อ password
	
	$this->Teacher->setTeacherUser($username); //// set ค่า username ใน Model Member
	$this->Teacher->setTeacherPassword($password); //// set ค่า password ใน Model Member
	
	$data = $this->Teacher->login();  ///// เรียกใช้ ฟังชั่น login ใน Model Member และน้ำตัวแปล $data มารับค่าที่ return กลับมา
	
	if($data){ /// เช็คค่า $data ว่ามีหรือไม่
		foreach($data as $r){  // สั่งวน เพื่อเก็บค่าที่อบู่ใน $data
		$sesData = array();
				$sesData = array(
				  'teacherId' => $r->teacherId,
				  'teacherName' => $r->teacherName,
				  'teacherLname' => $r->teacherLname,
				  'teacherAddress' => $r->teacherAddress,
				  'teacherEmail' => $r->teacherEmail,
				  'teacherPhone' => $r->teacherPhone,
				  'teacherUser' => $r->teacherUser,
				  'teacherStatus' => $r->teacherStatus
				);
		}
 	 		$this->session->set_userdata('loginData',$sesData); ////นำค่า $sesData ที่เป็น array มาเก็บใน session ชื่อ loginData
	   		$this->redirects(); /// เรียกใช้ ฟังชั่น redirects
			return TRUE;
 		}else{ //// ถ้าค่า $data เป็นเท็จ

				$data['error'] = '<font color="RED" style="font-size:12px">!!Password หรือ Username ผิด</font>'; //ให้ $data['error'] เท่ากับข้อความ  เมื่อ ไม่มี user และ pass อยู่ในฐานข้อมูล
				$this->load->view('login_view'); /// ส่งข้อมูลขึ้นไป หน้า home_login
		
			return false; /// พร้อมกับ return false; 
		}
		
 }
 
  function redirects()
 {
   if($this->session->userdata('loginData'))/// แรกดู ข้อมูลที่เก็บใน session ชื่อ loginData พร้อมกับ เช็คเงื่อนไขว่า มีจิงหรือ เท็จ
   {
     $session_data = $this->session->userdata('loginData');  /// แรกดู ข้อมูลที่เก็บใน session ชื่อ loginData
	     $satus = $session_data['teacherStatus'];  /// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
			 if($satus=="admin"){ //เช็คค่า $satus ว่าเป็น admin
				  header( 'Location: '.base_url().'index.php/admin' ); /// ไปยัง contorller Admin
			 }else if($satus=="teacher"){//เช็คค่า $satus ว่าเป็น user
				 header( 'Location: '.base_url().'index.php/user' ); /// ไปยัง contorller user
			 }else if($satus=="student"){//เช็คค่า $satus ว่าเป็น user
				 header( 'Location: '.base_url().'index.php/user1' ); /// ไปยัง contorller us
			 }
			 
			 
	}else{ /// เมื่อไม่มีข้อมูลใน $this->session->userdata('loginData')
			   header( 'Location: '.base_url().'index.php/home' );/// ไปยัง contorller home
	}
 }
 


}

?>

