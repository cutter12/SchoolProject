<?php 

class MainModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    //--------------------------------- ส่วนของการ Login เข้าสู่ระบบ----------------------------------------------------------------------
    public function logincheck($username,$password){
        
        $this->db->select('username,password,fname,lname');
        $this->db->where(array('username'=>$username,'password'=>$password));
        $query = $this->db->get('admin_user'); 
        return $query->row(); 
    }
    //---------------------------------------------------------------------------------------------------------------------------------
    
    
    //---------------------------------ส่วนของการเพิ่มข้อมูลการสมัครเรียนออนไลน์ (Online Register) Insert -------------------------------------
    public function studentTableInsert($idcard,$prefix,$fname,$lname,$sex){
        $data = array(
            'idcard'=>$idcard,
            'prefix'=>$prefix,
            'fname'=>$fname,
            'lname'=>$lname,
            'sex'=>$sex
        );
        $this->db->insert('student',$data);
        $query = $this->db->count_all('student');
        return $query;
    }
    public function addressTableInsert($address_information,$zipcode,$student_id){
        $data = array(
            'address_information' => $address_information,
            'zipcode' => $zipcode,
            'student_id' => $student_id
        );
        return $this->db->insert('address',$data);
    }

    public function phonenumberTableInsert($phonenumber1,$student_id){
        $data = array(
            'phonenumber1'=>$phonenumber1,
            'student_id'=>$student_id 
        );
        
        return $this->db->insert('phonenumber',$data);
    }

    public function branchTableInsert($branch_name,$student_id){
        $data = array(
            'branch_name'=>$branch_name,
            'student_id'=>$student_id
        );
        
        return $this->db->insert('branch',$data);
    }
    //------------------------------------------------------------------------------------------------------------------------------------
    public function selectTableData(){
        $this->db->select('id,fname,lname');
        $query = $this->db->get('student');

        return $query;
    
    }
    public function selectStudentInformation($id){
        $sql = "SELECT s.idcard,s.prefix,s.fname,s.lname,s.sex,\n"

    . "		a.address_information,a.zipcode,\n"

    . "        p.phonenumber1,b.branch_name \n"

    . "FROM student s \n"

    . "JOIN address a ON s.id = a.student_id\n"

    . "JOIN phonenumber p ON s.id = p.student_id\n"

    . "JOIN branch b ON s.id = b.student_id WHERE s.id =".$id."";

        $query = $this->db->query($sql);
        return $query->row();

    }

    public function updateStudentInformation($id){
        
    }
    

    
}