<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_view_controller
 *
 * @author my
 */
class user_view_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
         $this->load->helper("url");
        $this->load->model('PagModel', 'pag');
        $this->load->library("pagination");
    }
    public function index() {
       
        
    }
    public function kormochari_list_show() {
         $data=array();
        $data['flag']='';
        
        $data['view_output']=$this->load->view('khormochari_view_to_user','',true);
        $this->load->view('content_container',$data);
    }
    public function employ_list_show() {
        $data=array();
        $data['flag']='';
        
        $data['view_output']=$this->load->view('employee_of_divisional_commisioner_office','',true);
        $this->load->view('content_container',$data);
        
    }
    public function bibag_poriciti_show() {
        $data=array();
        $data['flag']='';
        
        $data['view_output']=$this->load->view('bibag_poriciti_to_user','',true);
        $this->load->view('content_container',$data);
    }
    public function bibagio_commisioner_bani_show() {
         $data=array();
        $data['flag']='';
        
        $data['view_output']=$this->load->view('bibagio_commisioner_bani_to_user','',true);
        $this->load->view('content_container',$data);
    }
        public function profile_show() {
         $data=array();
        $data['flag']='';
        
        $data['view_output']=$this->load->view('commisioner_ar_profile_show_user','',true);
        $this->load->view('content_container',$data);
    }
    public function commisioner_karjaloy_employe($id) {
          $data=array();
        $data['flag']='';
        $value['id']=$id;
        
        $data['view_output']=$this->load->view('employee_of_divisional_commisioner_to_user',$value,true);
        $this->load->view('content_container',$data);
    }
        public function jayla_prosasok_show() {
          $data=array();
        $data['flag']='';
    
        
        $data['view_output']=$this->load->view('jayla_prosasok','',true);
        $this->load->view('content_container',$data);
    }
    public function otirikto_jayla_prosasok_show()
    {
         $config = array();
        $config["base_url"] = base_url() . "user_view_controller/otirikto_jayla_prosasok_show";
        $config["total_rows"] = $this->pag->total_count();
        $config["per_page"] = 18;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $result["result"] = $this->pag->
            get_users($config["per_page"], $page);
        $result["paginglinks"] = $this->pagination->create_links();

        $data=array();
        $data['flag']='';
        $data['view_output']=$this->load->view('otirikto_jayla_prosasok',$result,true);
        $this->load->view('content_container',$data);
    }
     public function upozila_nirbahi_officer_show()
    {
         $config = array();
        $config["base_url"] = base_url() . "user_view_controller/upozila_nirbahi_officer_show";
        $config["total_rows"] = $this->pag->total_count_upojaylay_nirbahi();
        $config["per_page"] = 18;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $result["result"] = $this->pag-> get_users_upojaylay_nirbahi($config["per_page"], $page);
           
        $result["paginglinks"] = $this->pagination->create_links();

        $data=array();
        $data['flag']='';
      
        $data['view_output']=$this->load->view('upojayla_nirbahi_officer',$result,true);
        
        $this->load->view('content_container',$data);
    }
     public function sohokari_commisioner_show()
    {
         $config = array();
        $config["base_url"] = base_url() . "user_view_controller/sohokari_commisioner_show";
        $config["total_rows"] = $this->pag->total_count_sohokari_commisioner_vumi();
        $config["per_page"] = 18;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $result["result"] = $this->pag->
            get_users_commisioner_vumi($config["per_page"], $page);
        $result["paginglinks"] = $this->pagination->create_links();

        $data=array();
        $data['flag']='';
        $data['view_output']=$this->load->view('sohokari_commisioner_vumi',$result,true);
        $this->load->view('content_container',$data);
    }




    //put your code here
}
