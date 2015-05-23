<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pemerintahmodel
 *
 * @author Ihsan
 */
class pemerintahmodel extends CI_Model {

    function getPusat() {
        return $this->db->get('Pusat');
    }

    function getProvinsi() {
        return $this->db->get('Provinsi');
    }

    function getKota() {
        return $this->db->get('KotaKabupaten');
    }

    // menampilkan pada methode pemerintahpusat/
    function getUserPemerintah($tingkat) {
        switch ($tingkat) {
            case 1:
                $this->db->select('Pemerintah.ID,Pemerintah.Nama NamaPemerintah, Users.Username,KotaKabupaten.Nama NamaKota,Pemerintah.UserID');
                $this->db->from('Pemerintah');
                $this->db->join('Users', 'Users.ID=Pemerintah.UserID');
                $this->db->join('KotaKabupaten', 'KotaKabupaten.ID=Pemerintah.KodePemerintah');
                $this->db->where('Pemerintah.Tipe', 'Kota');
                return $this->db->get();
            case 2:
                $this->db->select('Pemerintah.ID,Pemerintah.Nama NamaPemerintah, Users.Username,Provinsi.Nama NamaProvinsi,Pemerintah.UserID');
                $this->db->from('Pemerintah');
                $this->db->join('Users', 'Users.ID=Pemerintah.UserID');
                $this->db->join('Provinsi', 'Provinsi.ID=Pemerintah.KodePemerintah');
                $this->db->where('Pemerintah.Tipe', 'Provinsi');
                return $this->db->get();
            case 3:
                $this->db->select('Pemerintah.ID,Pemerintah.Nama NamaPemerintah, Users.Username,Pusat.Nama NamaPusat,Pemerintah.UserID');
                $this->db->from('Pemerintah');
                $this->db->join('Users', 'Users.ID=Pemerintah.UserID');
                $this->db->join('Pusat', 'Pusat.ID=Pemerintah.KodePemerintah');
                $this->db->where('Pemerintah.Tipe', 'Pusat');
                return $this->db->get();
        }
    }

    // select data untuk method pemerintahkota,provinsi,pusat/edit/1
    function getUserPemerintahEdit($id) {
        $this->db->select('*');
        $this->db->from('Pemerintah');
        $this->db->where('ID', $id);
        return $this->db->get();
    }
    
    //update User Pemerintah
    function updateUserPemerintah($id,$data){
        $this->db->where('ID',$id);
        $this->db->update('Pemerintah',$data);
    }
    
    //insert User Pemerintah
    function insertPemerintah($data) {
        $this->db->insert('Pemerintah', $data);
    }
    
    //delete User Pemerintah
    function deleteUserPemerintah($id){
        $this->db->where('ID',$id);
        $this->db->delete('Pemerintah');
    }
    
    // mengambil id users terakhir
    function getLastID() {
        $this->db->select('ID');
        $this->db->from('Users');
        $this->db->order_by("ID", "desc");

        $hasil = $this->db->get();
        $x = $hasil->row_array();

        return $x['ID'];
    }
    
    function getTingkatPemerintah($tingkat){
        switch ($tingkat){
            case 1:
                $this->db->select('*');
                $this->db->from('KotaKabupaten');
                return $this->db->get();
                break;
            case 2:
                $this->db->select('*');
                $this->db->from('Provinsi');
                return $this->db->get();
                break;
            case 3:
                $this->db->select('*');
                $this->db->from('Pusat');
                return $this->db->get();
                break;
        }
    }
    
    // administrator/tingkatkota,tingkatprovinsi,tingkatpusat
    function insertTingkatPemerintah($tingkat,$data){
        switch ($tingkat){
            case 1:
                $this->db->insert('KotaKabupaten',$data);
                break;
            case 2:
                $this->db->insert('Provinsi',$data);
                break;
            case 3:
                $this->db->insert('Pusat',$data);
                break;
        }
    }
    // administrator/tingkatkota,tingkatprovinsi,tingkatpusat
    function deleteTingkatPemerintah($tingkat,$id){
        switch ($tingkat){
            case 1:
                $this->db->delete('KotaKabupaten',$id);
                break;
            case 2:
                $this->db->delete('Provinsi',$id);
                break;
            case 3:
                $this->db->delete('Pusat',$id);
                break;
        }
    }
    

    function getEditUserPemerintah($id) {
        $this->db->select('*');
    }

}
