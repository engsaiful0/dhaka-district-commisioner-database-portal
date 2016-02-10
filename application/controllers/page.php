<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author my
 */
class page extends CI_Controller {
    //put your code here
     public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model('PagModel', 'pag');
        $this->load->library("pagination");
    }
    public function index(  ) {
   $config = array();
        $config["base_url"] = base_url() . "page/index";
        $config["total_rows"] = $this->pag->total_count();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $result["result"] = $this->pag->
            get_users($config["per_page"], $page);
        $result["paginglinks"] = $this->pagination->create_links();

        $this->load->view("pagination_show", $result);
   }
}
