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
    
    function getprofil($username){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('masyarakat','masyarakat.UserID=users.id');
        $this->db->where('users.email',$username);
        return $this->db->get();
    }
    
    // mengambil id users terakhir
    function getLastID() {
        $this->db->select('ID');
        $this->db->from('users');
        $this->db->order_by("ID", "desc");

        $hasil = $this->db->get();
        $x = $hasil->row_array();

        return $x['ID'];
    }
    
    function insert($data){
        $this->db->insert('masyarakat',$data);
    }
    
    // edit profil pada masyarakat/profil/edit
    function edit($id,$data){
        $this->db->where('ID',$id);
        $this->db->update('masyarakat',$data);
    }
    
    // mengambil jumlah keluhan berdasarkan status tiap user masyarakat
    // mengambil fungsi getprofil untuk mengambil UserID
    function getCountKeluhan($username){
        $user = $this->getprofil($username)->row_array();
        
        // status belum ditanggapi
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->where('UserID',$user['id']);
        $this->db->where('StatusKeluhan','Belum');
        $jumlah['belum'] = $this->db->count_all_results();
        
        // status belum ditanggapi
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->where('UserID',$user['id']);
        $this->db->where('StatusKeluhan','Proses');
        $jumlah['proses'] = $this->db->count_all_results();
        
        // status belum ditanggapi
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->where('UserID',$user['id']);
        $this->db->where('StatusKeluhan','Selesai');
        $jumlah['selesai'] = $this->db->count_all_results();
        
        return $jumlah;
    }
    
    // get user masyarakat untuk edit /masyarakat/edit/1
    function getUserMasyarakatEdit($id){
        $this->db->select('*');
        $this->db->from('masyarakat');
        $this->db->where('ID',$id);
        return $this->db->get();
    }
}
