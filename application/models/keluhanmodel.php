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
class keluhanmodel extends CI_Model {
    
    function getkeluhan(){
        return $this->db->get('Keluhan');
    }
    
    function insert($data){
        $this->db->insert('Keluhan',$data);
    }
}
