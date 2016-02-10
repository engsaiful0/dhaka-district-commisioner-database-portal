<?php


 
class content_container_controller extends CI_Controller {
    public function index() {
       
         $data=array();
        $data['output_content']='';
        $data['flag']='';
        $this->load->view('admin_panel',$data);
    }
    public function content_container_show()
    {
        
    }
    //put your code here
}
