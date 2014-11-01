<?php 
class teacher extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $teacherId ; ######  ตัวแปร  ชื่อ teacherId  ######
    var $teacherName ; ######  ตัวแปร  ชื่อ teacherName  ######
    var $teacherLname ; ######  ตัวแปร  ชื่อ teacherLname  ######
    var $teacherAddress ; ######  ตัวแปร  ชื่อ teacherAddress  ######
    var $teacherEmail ; ######  ตัวแปร ชื่อ teacherEmail  ######
    var $teacherPhone ; ######  ตัวแปร ชื่อ teacherPhone  ######
    var $teacherUser ; ######  ตัวแปร ชื่อ teacherUser  ######
    var $teacherPassword ; ######  ตัวแปร ชื่อ teacherPassword  ######
    var $teacherStatus ; ######  ตัวแปร ชื่อ teacherStatus  ######
###### End Attribute  ###### 

 ###### SET : $teacherId ######
    function setTeacherId($teacherId){
        $this->teacherId = $teacherId; 
     }
###### End SET : $teacherId ###### 


###### GET : $teacherId ######
    function getTeacherId(){
        return $this->teacherId; 
     }
###### End GET : $teacherId ###### 


 ###### SET : $teacherName ######
    function setTeacherName($teacherName){
        $this->teacherName = $teacherName; 
     }
###### End SET : $teacherName ###### 


###### GET : $teacherName ######
    function getTeacherName(){
        return $this->teacherName; 
     }
###### End GET : $teacherName ###### 


 ###### SET : $teacherLname ######
    function setTeacherLname($teacherLname){
        $this->teacherLname = $teacherLname; 
     }
###### End SET : $teacherLname ###### 


###### GET : $teacherLname ######
    function getTeacherLname(){
        return $this->teacherLname; 
     }
###### End GET : $teacherLname ###### 


 ###### SET : $teacherAddress ######
    function setTeacherAddress($teacherAddress){
        $this->teacherAddress = $teacherAddress; 
     }
###### End SET : $teacherAddress ###### 


###### GET : $teacherAddress ######
    function getTeacherAddress(){
        return $this->teacherAddress; 
     }
###### End GET : $teacherAddress ###### 


 ###### SET : $teacherEmail ######
    function setTeacherEmail($teacherEmail){
        $this->teacherEmail = $teacherEmail; 
     }
###### End SET : $teacherEmail ###### 


###### GET : $teacherEmail ######
    function getTeacherEmail(){
        return $this->teacherEmail; 
     }
###### End GET : $teacherEmail ###### 


 ###### SET : $teacherPhone ######
    function setTeacherPhone($teacherPhone){
        $this->teacherPhone = $teacherPhone; 
     }
###### End SET : $teacherPhone ###### 


###### GET : $teacherPhone ######
    function getTeacherPhone(){
        return $this->teacherPhone; 
     }
###### End GET : $teacherPhone ###### 


 ###### SET : $teacherUser ######
    function setTeacherUser($teacherUser){
        $this->teacherUser = $teacherUser; 
     }
###### End SET : $teacherUser ###### 


###### GET : $teacherUser ######
    function getTeacherUser(){
        return $this->teacherUser; 
     }
###### End GET : $teacherUser ###### 


 ###### SET : $teacherPassword ######
    function setTeacherPassword($teacherPassword){
        $this->teacherPassword = $teacherPassword; 
     }
###### End SET : $teacherPassword ###### 


###### GET : $teacherPassword ######
    function getTeacherPassword(){
        return $this->teacherPassword; 
     }
###### End GET : $teacherPassword ###### 


 ###### SET : $teacherStatus ######
    function setTeacherStatus($teacherStatus){
        $this->teacherStatus = $teacherStatus; 
     }
###### End SET : $teacherStatus ###### 


###### GET : $teacherStatus ######
    function getTeacherStatus(){
        return $this->teacherStatus; 
     }
###### End GET : $teacherStatus ###### 
 function login($username, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('teacher');
   $this -> db -> where('teacherUser', $this->getTeacherUser());
   $this -> db -> where('teacherPassword', $this->getTeacherPassword());
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 function add()
 {
	 $data = array(
	 					'teacherName' => $this->getTeacherName(),
						'teacherLName' => $this->getTeacherLname(),
						'teacherAddress' => $this->getTeacherAddress(),
						'teacherEmail' => $this->getTeacherEmail(),
						'teacherPhone' => $this->getTeacherPhone(),
						'teacherUser' => $this->getTeacherUser(),
						'teacherPassword' => MD5($this->getTeacherPassword()),
	 
	 );
	 
	 $this->db->insert('teacher', $data);
	 return $this->db->insert_id();
 
}
 function getalldata(){
	 
	  return $this->db->get('teacher')->result_array();

}

 function update()
 {
	 $data = array(
	 					'teacherName' => $this->getTeacherName(),
						'teacherLName' => $this->getTeacherLname(),
						'teacherAddress' => $this->getTeacherAddress(),
						'teacherEmail' => $this->getTeacherEmail(),
						'teacherPhone' => $this->getTeacherPhone(),
						'teacherUser' => $this->getTeacherUser(),
						'teacherPassword' => MD5($this->getTeacherPassword()),
	 
	 );
	 $this->db->where('teacherId', $this->getTeacherId());
	 $this->db->update('teacher', $data);
	  
}
 function getpkdata()
 {
	 		$this->db->where('teacherId', $this->getTeacherId());
	 return $this->db->get('teacher')->result_array();
 }
 
  function deletedata()
 {
	 		$this->db->where('teacherId', $this->getTeacherId());
	 		$this->db->delete('teacher');
 }

}
?>