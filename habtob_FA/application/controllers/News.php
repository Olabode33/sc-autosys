<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News
 *
 * @author olabode33
 */
class News extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
    
    public function index(){
        $data['news'] = $this->news_model->get_news();
        $data['title'] = "News Archive";
        
        $this->load->view('shared/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('shared/footer');
    }
    
    public function view($slug = NULL){
        $data['news_item'] = $this->news_model->get_news($slug);
        
        if(empty($data['news_item'])){
            show_404();
        }
        
        $data['title'] = $data['news_item']['title'];
        
        $this->load->view('shared/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('shared/footer');
    }
    
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Create a news item';
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('shared/header', $data);
            $this->load->view('news/create');
            $this->load->view('shared/footer');
        }
        else {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }
}
