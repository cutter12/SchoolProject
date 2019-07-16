<?php

class MainController extends CI_Controller{
    


    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model("mainmodel");
    }

    public function index(){
        $data['title'] = 'หน้าหลัก';    
        $this->load->view('layout/header',$data);
        $this->load->view('page/mainpage');
        $this->load->view('layout/footer');
        
    }
    
    public function schooldata(){
        $data['title'] = 'ข้อมูลวิทยาลัย';
        $this->load->view('layout/header',$data);
        $this->load->view('page/schooldata');
        $this->load->view('layout/footer');
    }

    

    public function admin(){
        $data['title'] = 'ติดต่อผู้ดูแลระบบ';
        $this->load->view('layout/header',$data);
        $this->load->view('page/adminpage');
        $this->load->view('layout/footer');
    } 

    public function formcheck(){ 
       $this->form_validation->set_rules('password','Pass','callback_messageset'); 

        if($this->form_validation->run() === FALSE){
            $this->admin();
        }
    }

    public function messageset(){
        $this->load->model('mainmodel'); 
        
        $result = $this->mainmodel->logincheck( 
            $this->input->post('username'),
            $this->input->post('password')
        );
        if(!isset($result)){
            $this->form_validation->set_message('messageset','ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
            return FALSE;
        }else{
            $this->backend();
        }
    }

    public function backend(){
        $this->load->view('backend/backend_layout/backend_header');
        $this->load->view('backend/backend_page/insert_member'); 
        $this->load->view('backend/backend_layout/backend_footer');
    }

    public function schoolhistory(){
        $data['title'] = 'ประวัติวิทยาลัย';
        $this->load->view('layout/header',$data);
        $this->load->view('page/schoolhistory');
        $this->load->view('layout/footer');
    }

    public function schoolmanager(){
        $data['title'] = 'ทำเนียบผู้บริหาร';
        $this->load->view('layout/header',$data);
        $this->load->view('page/schoolmanager');
        $this->load->view('layout/footer');
    }

    public function schoolregister(){
        $data['title'] = 'สมัครเรียน';
        $this->load->view('layout/header',$data);
        $this->load->view('page/schoolregister');
        $this->load->view('layout/footer');
    }


    public function student(){
        
        /* ตัวแปรสำหรับ MainModel */
        // Student Table
        $idcard = $this->input->post('idcard');
        $prefix = $this->input->post('prefix');
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $sex = $this->input->post('sex');
        //Address Table
        $address_information = $this->input->post('address_information');
        $zipcode = $this->input->post('zipcode');
        //Phone Number Table 
        $phonenumber1 = $this->input->post('phonenumber');
        //Branch table
        $branch_name = $this->input->post('porworchor');
        $row_count = $this->mainmodel->studentTableInsert($idcard,$prefix,$fname,$lname,$sex);
        $address_query = $this->mainmodel->addressTableInsert($address_information,$zipcode,$row_count);
        $phonenumber_query = $this->mainmodel->phonenumberTableInsert($phonenumber1,$row_count);
        $branch_query = $this->mainmodel->branchTableInsert($branch_name,$row_count);

        if($row_count !== 0 && $address_query !== 0 && $phonenumber_query !== 0 && $branch_query !== 0){
            echo "Insert Data Complete";

        }else{
            echo "Fail Insert";
        }
        

        
        
    }

    

    
    
}