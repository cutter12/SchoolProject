<?php

class MainController extends CI_Controller{
    


    public function __construct(){
        parent::__construct();
        $this->load->database();
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

    public function register_data_in(){
        $this->load->model('mainmodel');
        $studentTableQuery = $this->mainmodel->studentTableInsert(
            $this->input->post('idcard'),
            $this->input->post('prefix'),
            $this->input->post('fname'),
            $this->input->post('lname'),
            $this->input->post('sex')
        );
        $data['message'] = "";
        
        if($studentTableQuery > 0){
            $data['message'] = "Pass";
        }else{
            $data['message'] = "Failed";
        }

        $this->load->view('page/register',$data);
        
        
        
    }

    
    
}