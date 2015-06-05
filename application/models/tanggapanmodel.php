<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author ihsanarifr
 */
class tanggapanmodel extends CI_Model {

//    function getkeluhan(){
//        return $this->db->get('Keluhan');
//    }
    // dipakai oleh masyarakat/Index
    function gettanggapan() {
        $this->db->select('*');
        $this->db->from('tanggapan');
        $this->db->order_by("ID", "DESC");
        return $this->db->get();
    }

    function insert($data) {
        $this->db->insert('tanggapan', $data);
    }

}
