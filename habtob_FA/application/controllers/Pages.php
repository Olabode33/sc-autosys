<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pages
 *
 * @author olabode33
 */
class Pages extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }


    public function view($page = 'home'){
        if(!file_exists(APPPATH. 'views/pages/'.$page.'.php')){
            //Page doesn't exist
            show_404();
        }
        
        $data['title'] = ucfirst($page);
        
        $this->load->view('shared/header', $data);
        $this->load->view('shared/_pages_header', $data);
        $this->load->view('pages/'.$page, $data );
        $this->load->view('shared/footer', $data);
    }
}
