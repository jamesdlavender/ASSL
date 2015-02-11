<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class main_model extends CI_Model {
    public function insert_into_user()
    {
        $data = array('username'=>'jameslavender', 'password'=>'james123');
        $this->db->insert('user',$data);
    }
    
    public function get_user()
    {
        $query = $this->db->get('user');
        return $query->result();
    }
    public function user_update($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('user',$data);
    }
}

?>