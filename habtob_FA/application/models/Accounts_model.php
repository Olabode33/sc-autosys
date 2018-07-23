<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accounts_model
 *
 * @author olabode33
 */
class Accounts_model extends CI_Model {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function register_account() {
        
        $registration_status = 'Registered';
        
        $data = array(
            'f_name' => $this->input->post('f_name'),
            'm_name' => $this->input->post('m_name'),
            'l_name ' => $this->input->post('l_name'),
            'dob' => $this->input->post('dob'),
            'gender' => $this->input->post('gender'),
            'state_of_origin' => $this->input->post('state_of_origin'),
            'address' => $this->input->post('address'),
            'lga' => $this->input->post('lga'),
            'state' => $this->input->post('state'),
            'is_student' => $this->input->post('is_student'),
            'education_level' => $this->input->post('education_level'),
            'hobbies' => $this->input->post('hobbies'),
            'reason_to_join' => $this->input->post('reason_to_join'),
            'preferred_position' => $this->input->post('preferred_position'),
            'guardian_full_name' => $this->input->post('guardian_full_name'),
            'guardian_address' => $this->input->post('guardian_address'),
            'guardian_phone' => $this->input->post('guardian_phone'),
            'guardian_email' => $this->input->post('guardian_email'),
            'contact_phone' => $this->input->post('contact_phone'),
            'contact_email' => $this->input->post('contact_email'),
            'nok_name' => $this->input->post('nok_name'),
            'nok_phone' => $this->input->post('nok_phone'),
            'nok_email' => $this->input->post('nok_email'),
            'nok_address' => $this->input->post('nok_address'),
            'registration_status' => $registration_status
        );
        
        return $this->db->insert('squad_registration', $data);
    }
}
