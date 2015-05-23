<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of masyarakatmodel
 *
 * @author Ihsan
 */
class masyarakatmodel extends CI_Model{
    //put your code here
    // access administrator
    function getUserMasyarakat(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('users_groups','users_groups.user_id=users.id');
        $this->db->join('groups', 'groups.id=users_groups.group_id');
        $this->db->join('masyarakat','masyarakat.UserID=users.id');
        return $this->db->get();
    }
}
