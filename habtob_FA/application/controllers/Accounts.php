<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accounts
 *
 * @author olabode33
 */
class Accounts extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('accounts_model');
        $this->load->helper('url_helper');
    }
    
    public function register(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Register';
        
        $this->form_validation->set_rules('f_name', 'First Name', 'required');
        $this->form_validation->set_rules('l_name', 'Last Name', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('lga', 'LGA', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('is_student', 'Are you a student?', 'required');
        $this->form_validation->set_rules('education_level', 'Educational Level', 'required');
        $this->form_validation->set_rules('reason_to_join', 'Why do you want to join us', 'required');
        $this->form_validation->set_rules('preferred_position', 'Preferred Position', 'required');
        $this->form_validation->set_rules('guardian_full_name', 'Guardian\'s Full Name', 'required');
        $this->form_validation->set_rules('guardian_address', 'Guardian\'s Address', 'required');
        $this->form_validation->set_rules('guardian_phone', 'Guardian\'s Phone', 'required');
        $this->form_validation->set_rules('guardian_email', 'Guardian\'s Email', 'required');
        $this->form_validation->set_rules('contact_phone', 'Contact Phone', 'required');
        $this->form_validation->set_rules('contact_email', 'Contact Email', 'required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('shared/header', $data);
            $this->load->view('accounts/register');
            $this->load->view('shared/footer');
        }
        else {
            $this->accounts_model->register_account();
            $this->load->view('shared/header', $data);
            $this->load->view('accounts/success');
            $this->load->view('shared/footer');
        }
    }
}
