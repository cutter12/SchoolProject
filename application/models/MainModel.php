<?php 

class MainModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function logincheck($username,$password){
        
        $this->db->select('username,password');
        $this->db->where(array('username'=>$username,'password'=>$password));
        $query = $this->db->get('admin_user'); 


        return $query->row(); 
    }

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
    

    
}