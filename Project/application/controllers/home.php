
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	
	    function __construct(){
	   parent::__construct();
	      $this->load->library('Excel/PHPExcel');
    }


function index(){  	  //// ฟังชั่นในการเรียกใช้งานครั้งแรก 
	$session_data = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session
 	if($session_data){ /// เช็คว่า session มีค่า จริง หรือ เท็จ
		header( 'Location: '.base_url().'index.php/CheckLogin/redirects' ); /// ถ้าจริง ให้ไปที่ Contorller CheckLogin ฟังชั่น redirects
	}else{
		$data['error']=""; /// set ค่า ตั้งต้น ข้อความ error ให้เป็นค่าว่าง เพื่อ กันไม่ให้ error
 		$this->load->view('login_view',$data); /// loadview ชื่อ home_login ส่ง array $data ขึ้นไปด้วย
	}
 }
 
 function logout(){  /// ฟังชั่น ออกจากระบบ
	 $this->session->unset_userdata('loginData'); /// ลบค่าใน session ชื่อ loginData
	 header( 'Location: '.base_url().'index.php/CheckLogin/redirects' ); //ไปที่ Contorller CheckLogin ฟังชั่น redirects
 }
 function student(){
	 $this->load->view('page/student');
 }
 
function teacher(){
	 $this->load->view('page/teacher');
}

function subject(){
	 $this->load->view('page/subject');
}

function gpa(){
	 $this->load->view('page/gpa');
}

function report(){
	$this->load->view('page/report');
	
}
function fromImport(){
		$this->load->view('importFile');
	}
	
	function importstudent(){
			
				$inputFileName = $_FILES['exc']['tmp_name'];
	
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				
				
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
						}
					}
				}


				for($i=0;$i<count($namedDataArray);$i++){

							
							$this->Student->setStudentCode($namedDataArray[$i]['studentCode']);
							$this->Student->setStudentName($namedDataArray[$i]['studentName']);
							$this->Student->setStudentLname($namedDataArray[$i]['studentLname']);
							$this->Student->setStudentAddress($namedDataArray[$i]['studentAddress']);
							
							$this->Student->add();
					
				}

	}
	
	function fromImports(){
		
		$this->load->view('importFile');
	}

	function fromImportsteacher(){
		
		$this->load->view('fromImports');
	}

	function fromImportsubject(){
		
		$this->load->view('fromImportss');
	}
	
	
	function importteacher(){
			
				$inputFileName = $_FILES['exc']['tmp_name'];
	
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				
				
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
						}
					}
				}


				for($i=0;$i<count($namedDataArray);$i++){

							
							$this->Teacher->setTeacherName($namedDataArray[$i]['teacherName']);
							$this->Teacher->setTeacherLname($namedDataArray[$i]['teacherLname']);
							$this->Teacher->setTeacherAddress($namedDataArray[$i]['teacherAddress']);
							$this->Teacher->setTeacherEmail($namedDataArray[$i]['teacherEmail']);
							$this->Teacher->setTeacherPhone($namedDataArray[$i]['teacherPhone']);
							$this->Teacher->setTeacherUser($namedDataArray[$i]['teacherUser']);
							$this->Teacher->setTeacherPassword($namedDataArray[$i]['teacherPassword']);
							$this->Teacher->setTeacherStatus($namedDataArray[$i]['teacherStatus']);
							
							
							$this->Teacher->add();
					
				}
	}


				function importsubject(){
			
				$inputFileName = $_FILES['exc']['tmp_name'];
	
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				
				
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
						}
					}
				}


				for($i=0;$i<count($namedDataArray);$i++){

							
							$this->Subject->setSubjectName($namedDataArray[$i]['subjectName']);
							$this->Subject->setSubjectCode($namedDataArray[$i]['subjectCode']);
						
							
							
							$this->Subject->add();
					
				}

	}
	
}
?>