<?php

class login_controller extends CI_Controller  {
    public function __construct() {
        parent::__construct();
       
    }
    public function login_function() {
        $user_name=  $this->input->post('user_name');
        $password=  $this->input->post('password');

        if($this->login_model->login_fn($user_name,$password))
        {
        $sdata=array();
        $sdata['user_name']=$user_name;
        $this->session->set_userdata($sdata);
        $data=array();
        $sdata['message']='';
        $data['output_content']='';
        $data['flag']='';
        $this->load->view('admin_panel',$data);
         
        }
 else {
         $sdata=array();
        $sdata['message']='User name or password error! Try again.';
        $this->session->set_userdata($sdata);
        redirect('home_controller');
      
 }
        
    }
     public function log_out(){
        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('message');
        session_destroy();
        $sedata=array();
        
        $sedata['message']="You have successfully log out!";
        
        $this->session->set_userdata($sedata);
        
        redirect('home_controller');
    }
    //put your code here
}
