<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News_model
 *
 * @author olabode33
 */
class News_model extends CI_Model {
    //put your code here
    public function __construct() {
        //parent::__construct();
        $this->load->database();
    }
    
    public function get_news($slug = FALSE) {
        if($slug === FALSE){
            $query = $this->db->get('news');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function set_news(){
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'text' => $this->input->post('text'),
            'slug' => $slug
        );
        
        return $this->db->insert('news', $data);
    }
}
