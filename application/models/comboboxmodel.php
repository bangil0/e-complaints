<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComboboxModel
 *
 * @author ihsanarifr
 */
class comboboxmodel extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function getKategori(){
        return $this->db->get('Kategori');
    }
    
    function getKotaKabupaten(){
        return $this->db->get('KotaKabupaten');
    }
    
    function getProvinsi(){
        return $this->db->get('Provinsi');
    }
    
    function getPusat(){
        return $this->db->get('Pusat');
    }
}
