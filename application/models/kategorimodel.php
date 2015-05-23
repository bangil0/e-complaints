<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of kategorimodel
 *
 * @author Ihsan
 */
class kategorimodel extends CI_Model {
    // select data kategori1
    function getKategori(){
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get();
    }
    
    function getKategoriEdit($id) {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('ID', $id);
        return $this->db->get();
    }
    
    //update kategori
    function updateKategori($id,$data){
        $this->db->where('ID',$id);
        $this->db->update('kategori',$data);
    }
    
    //insert kategori
    function insertKategori($data) {
        $this->db->insert('kategori', $data);
    }
    
    //delete kategori
    function deleteKategori($id){
        $this->db->delete('kategori',$id);
    }
}
