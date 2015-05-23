<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usermode
 *
 * @author Ihsan
 */
class usermodel extends CI_Model {

    //put your code here
    function getJumlahUser() {
        $this->db->like('groups.id', '4');
        $this->db->from('users');
        $this->db->join('users_groups', 'users_groups.user_id = users.id');
        $this->db->join('groups', 'groups.id=users_groups.group_id');
        $jumlah['masyarakat'] = $this->db->count_all_results();

        $this->db->like('groups.id', '3');
        $this->db->from('users');
        $this->db->join('users_groups', 'users_groups.user_id = users.id');
        $this->db->join('groups', 'groups.id=users_groups.group_id');
        $jumlah['pemerintah'] = $this->db->count_all_results();

        return $jumlah;
    }

}
