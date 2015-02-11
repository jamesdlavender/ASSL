<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Main_Controller extends CI_Controller {

        public function index()
        {
            $this->load->model('main_model');
            $data['user_data'] = $this->get_user_data();
            $this->update_user_data();
            $data['user_data'] = $this->get_user_data();
            $this->load->view('main_view', $data);
        }
        
        private function get_user_data()
        {
            $this->load->model('main_model');
            $result = $this->main_model->get_user();
            return $result;
        }
        
        private function update_user_data()
        {
            $data['username'] = 'Jim';
            $data['password'] = 'jim123';
            foreach ($this->get_user_data() as $row)
            {
                $id = $row->id;
            }
            $this->load->model('main_model');
            $this->main_model->user_update($data,$id);
        }
}

?>