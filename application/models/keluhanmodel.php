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

//    function getkeluhan(){
//        return $this->db->get('Keluhan');
//    }

    function getkeluhan() {
        return $this->db->get('Keluhan');
    }

    function insert($data) {
        $this->db->insert('Keluhan', $data);
    }

    function getJumlahKeluhan() {
        $this->db->like('StatusKeluhan', 'Belum');
        $this->db->from('Keluhan');
        $jumlah['belum'] = $this->db->count_all_results();

        $this->db->like('StatusKeluhan', 'Proses');
        $this->db->from('Keluhan');
        $jumlah['proses'] = $this->db->count_all_results();

        $this->db->like('StatusKeluhan', 'Selesai');
        $this->db->from('Keluhan');
        $jumlah['selesai'] = $this->db->count_all_results();

        return $jumlah;
    }

    function getKeluhanAdmin() {
        $this->db->select('*');
        $this->db->from('Keluhan');
        $hasil = $this->db->get()->result();
        
        $data = array();
        foreach ($hasil as $row) {
//            echo $row->IsiKeluhan;
//            echo $row->Tanggal;
//            echo $row->StatusKeluhan;
//            echo $row->KodeTingkatan;
//            echo $row->Tipe;
//            echo $row->UserID;
//            echo $row->KategoriID;
            switch ($row->Tipe) {
                case 'Kota':
                    $this->db->select('keluhan.ID,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,kotakabupaten.Nama NamaPemerintah');
                    $this->db->from('keluhan');
                    $this->db->join('kotakabupaten','kotakabupaten.ID=keluhan.KodeTingkatan');
                    $this->db->join('kategori','kategori.ID=keluhan.KategoriID');
                    $this->db->join('users','users.id=keluhan.UserID');
                    $this->db->where('keluhan.ID',$row->ID);
                    $hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil;
                    break;
                case 'Provinsi':
                    $this->db->select('keluhan.ID,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,provinsi.Nama NamaPemerintah');
                    $this->db->from('keluhan');
                    $this->db->join('provinsi','provinsi.ID=keluhan.KodeTingkatan');
                    $this->db->join('kategori','kategori.ID=keluhan.KategoriID');
                    $this->db->join('users','users.id=keluhan.UserID');
                    $this->db->where('keluhan.ID',$row->ID);
                    $hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil;
                    break;
                case 'Pusat' :
                    $this->db->select('keluhan.ID,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,pusat.Nama NamaPemerintah');
                    $this->db->from('keluhan');
                    $this->db->join('pusat','pusat.ID=keluhan.KodeTingkatan');
                    $this->db->join('kategori','kategori.ID=keluhan.KategoriID');
                    $this->db->join('users','users.id=keluhan.UserID');
                    $this->db->where('pusat.ID',$row->ID);
                    $hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil;
                    break;
            }
            //echo "<br>";
            //echo $data[$row->ID]['Nama'];
        }
        return $data;
    }

}
