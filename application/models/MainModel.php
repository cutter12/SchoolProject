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
        $this->db->insert_string('student',$data);
        return $this->db->affected_rows();
        
    }
    public function addressTableInsert($housecode,$mubran,$tambol,$amphor,$province,$zipcode,$student_id){
        $data = array(
            'house_code'=>$housecode,
            'mubarn'=>$mubarn,
            'tambol'=>$tambol,
            'amphor'=>$amphor,
            'province'=>$province,
            'zipcode'=>$zipcode,
            'student_id'=>$student_id
        );
        $this->db->insert_string('address',$data);
        return $this->db->affected_rows();
    }
    public function phonenumberTableInsert($phonenumber1,$phonenumber2){
        $data = array(
            'phonenumber1'=>$phonenumber1,
            'phonenumber2'=>$phonenumber2,
            'student_id'=>$student_id 
        );
        $this->db->insert_string('phonenumber',$data);
        return $this->db->affected_rows();
    }

    public function branchTableInsert($branch_name,$student_id){
        $data = array(
            'branch_name'=>$branch_name,
            'student_id'=>$student_id
        );
        $this->db->insert_string('branch',$data);
        return $this->db->affected_rows();
    }
    

    
}