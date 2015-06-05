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
    function getKota_dropdown() {
        $this->db->select('*');
        $this->db->from('kotakabupaten');
        $this->db->order_by('ID');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = 'Pilih Kota/Kabupaten';
            foreach ($result->result_array() as $row) {
                $return[$row['ID']] = $row['Nama'];
            }
        }
        return $return;
    }
    
    function getProvinsi_dropdown() {
        $this->db->select('*');
        $this->db->from('provinsi');
        $this->db->order_by('ID');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = 'Pilih Provinsi';
            foreach ($result->result_array() as $row) {
                $return[$row['ID']] = $row['Nama'];
            }
        }
        return $return;
    }
    
    function getPusat_dropdown() {
        $this->db->select('*');
        $this->db->from('pusat');
        $this->db->order_by('ID');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = 'Pilih Lembaga';
            foreach ($result->result_array() as $row) {
                $return[$row['ID']] = $row['Nama'];
            }
        }
        return $return;
    }
    
    function getKategori_dropdown(){
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->order_by('ID');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = 'Pilih Kategori';
            foreach ($result->result_array() as $row) {
                $return[$row['ID']] = $row['Nama'];
            }
        }
        return $return;
    }
    function getKategori(){
        return $this->db->get('Kategori');
    }
    
    function getKotaKabupaten(){
        return $this->db->get('kotakabupaten');
    }
    function getProvinsi(){
        return $this->db->get('provinsi');
    }
    
    function getPusat(){
        return $this->db->get('pusat');
    }
}
