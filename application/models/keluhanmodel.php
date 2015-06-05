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
    // dipakai oleh masyarakat/Index
    function getkeluhan() {
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->order_by("ID", "DESC");
        return $this->db->get();
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
            switch ($row->Tipe) {
                case 'Kota':
                    $this->db->select('keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,kotakabupaten.Nama NamaPemerintah');
                    $this->db->from('keluhan');
                    $this->db->join('kotakabupaten', 'kotakabupaten.ID=keluhan.KodeTingkatan');
                    $this->db->join('kategori', 'kategori.ID=keluhan.KategoriID');
                    $this->db->join('users', 'users.id=keluhan.UserID');
                    $this->db->where('keluhan.ID', $row->ID);
                    $this->db->where('keluhan.Tipe','Kota');
                    $hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil;
                    break;
                case 'Provinsi':
                    $this->db->select('keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,provinsi.Nama NamaPemerintah');
                    $this->db->from('keluhan');
                    $this->db->join('provinsi', 'provinsi.ID=keluhan.KodeTingkatan');
                    $this->db->join('kategori', 'kategori.ID=keluhan.KategoriID');
                    $this->db->join('users', 'users.id=keluhan.UserID');
                    $this->db->where('keluhan.ID', $row->ID);
                    $this->db->where('keluhan.Tipe','Provinsi');
                    $hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil;
                    break;
                case 'Pusat' :
                    $this->db->select('keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,pusat.Nama NamaPemerintah');
                    $this->db->from('keluhan');
                    $this->db->join('pusat', 'pusat.ID=keluhan.KodeTingkatan');
                    $this->db->join('kategori', 'kategori.ID=keluhan.KategoriID');
                    $this->db->join('users', 'users.id=keluhan.UserID');
                    $this->db->where('pusat.ID', $row->ID);
                    $this->db->where('keluhan.Tipe','Pusat');
                    $hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil;
                    break;
            }
            //echo "<br>";
            //echo $data[$row->ID]['Nama'];
        }
        return $data;
    }

    // diambil oleh masyarakat/beranda
    function getKeluhanMasyarakat() {
        $this->db->select('*');
        $this->db->from('Keluhan');
        $this->db->order_by('ID', 'DESC');
        $hasil = $this->db->get()->result();

        $data = array();
        foreach ($hasil as $row) {
            switch ($row->Tipe) {
                case 'Kota':
                    $this->db->select('keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,kotakabupaten.Nama NamaPemerintah');
                    $this->db->from('keluhan');
                    $this->db->join('kotakabupaten', 'kotakabupaten.ID=keluhan.KodeTingkatan');
                    $this->db->join('kategori', 'kategori.ID=keluhan.KategoriID');
                    $this->db->join('users', 'users.id=keluhan.UserID');
                    $this->db->where('keluhan.ID', $row->ID);
                    $this->db->where('keluhan.Tipe','Kota');
                    $hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil;
                    break;
                case 'Provinsi':
                    $this->db->select('keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,provinsi.Nama NamaPemerintah');
                    $this->db->from('keluhan');
                    $this->db->join('provinsi', 'provinsi.ID=keluhan.KodeTingkatan');
                    $this->db->join('kategori', 'kategori.ID=keluhan.KategoriID');
                    $this->db->join('users', 'users.id=keluhan.UserID');
                    $this->db->where('keluhan.ID', $row->ID);
                    $this->db->where('keluhan.Tipe','Provinsi');
                    $hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil;
                    break;
                case 'Pusat' :
                    $this->db->select('keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,pusat.Nama NamaPemerintah');
                    $this->db->from('keluhan');
                    $this->db->join('pusat', 'pusat.ID=keluhan.KodeTingkatan');
                    $this->db->join('kategori', 'kategori.ID=keluhan.KategoriID');
                    $this->db->join('users', 'users.id=keluhan.UserID');
                    $this->db->where('pusat.ID', $row->ID);
                    $this->db->where('keluhan.Tipe','Pusat');
                    $hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil;
                    break;
            }
            //echo "<br>";
            //echo $data[$row->ID]['Nama'];
        }
        return $data;
    }

    // diambil oleh masyarakat/keluhan_saya
    function getKeluhanMasyarakatUser($user) {
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->order_by('ID', 'DESC');
        $this->db->where('keluhan.UserID', $user);
        $hasil = $this->db->get()->result();

        $data = array();
        foreach ($hasil as $row) {
            switch ($row->Tipe) {
                case 'Kota':
//                    $this->db->select('keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,kotakabupaten.Nama NamaPemerintah,tanggapan.IsiTanggapan,');
//                    $this->db->from('keluhan');
//                    $this->db->join('kotakabupaten', 'kotakabupaten.ID=keluhan.KodeTingkatan');
//                    $this->db->join('tanggapan','tanggapan.KeluhanID=keluhan.ID');
//                    $this->db->join('kategori', 'kategori.ID=keluhan.KategoriID');
//                    $this->db->join('users', 'users.id=keluhan.UserID');
//                    $this->db->where('keluhan.ID', $row->ID);
//                    $this->db->where('keluhan.UserID', $user);
//                    $this->db->where('keluhan.Tipe','Kota');
                    //$hasil = $this->db->get()->row_array();
                    $hasil = $this->db->query("SELECT keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,kotakabupaten.Nama NamaPemerintah,tanggapan.IsiTanggapan
                                from keluhan
                                INNER JOIN kotakabupaten ON kotakabupaten.id=keluhan.KodeTingkatan
                                LEFT OUTER JOIN tanggapan ON tanggapan.KeluhanID=keluhan.ID
                                INNER JOIN kategori ON kategori.ID=keluhan.KategoriID
                                INNER JOIN users on users.id=keluhan.UserID
                                where keluhan.ID = $row->ID AND keluhan.UserID = $user AND keluhan.Tipe LIKE 'Kota'");
                    $data[$row->ID] = $hasil->row_array();
                    break;
                case 'Provinsi':
                    $hasil = $this->db->query("SELECT keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,kotakabupaten.Nama NamaPemerintah,tanggapan.IsiTanggapan
                                from keluhan
                                INNER JOIN kotakabupaten ON kotakabupaten.id=keluhan.KodeTingkatan
                                LEFT OUTER JOIN tanggapan ON tanggapan.KeluhanID=keluhan.ID
                                INNER JOIN kategori ON kategori.ID=keluhan.KategoriID
                                INNER JOIN users on users.id=keluhan.UserID
                                where keluhan.ID = $row->ID AND keluhan.UserID = $user AND keluhan.Tipe LIKE 'Provinsi'");
                    //$hasil = $this->db->row_array();
                    $data[$row->ID] = $hasil->row_array();
                    break;
                case 'Pusat' :
                    $hasil = $this->db->query("SELECT keluhan.ID,keluhan.Judul,users.username NamaUser,keluhan.IsiKeluhan,keluhan.StatusKeluhan,keluhan.Tanggal,kategori.Nama NamaKategori,kotakabupaten.Nama NamaPemerintah,tanggapan.IsiTanggapan
                                from keluhan
                                INNER JOIN kotakabupaten ON kotakabupaten.id=keluhan.KodeTingkatan
                                LEFT OUTER JOIN tanggapan ON tanggapan.KeluhanID=keluhan.ID
                                INNER JOIN kategori ON kategori.ID=keluhan.KategoriID
                                INNER JOIN users on users.id=keluhan.UserID
                                where keluhan.ID = $row->ID AND keluhan.UserID = $user AND keluhan.Tipe LIKE 'Pusat'");
                    //$hasil = $this->db->get()->row_array();
                    $data[$row->ID] = $hasil->row_array();
                    break;
            }
            //echo "<br>";
            //echo $data[$row->ID]['Nama'];
        }
        return $data;
    }

    // grafik diambil /masyarakat/keluhan
    function grafikKeluhanUser($user) {
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->where('UserID', $user);
        $this->db->like('StatusKeluhan', 'Belum');
        $jumlah['belum'] = $this->db->count_all_results();

        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->where('UserID', $user);
        $this->db->like('StatusKeluhan', 'Proses');
        $jumlah['proses'] = $this->db->count_all_results();

        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->where('UserID', $user);
        $this->db->like('StatusKeluhan', 'Selesai');
        $jumlah['selesai'] = $this->db->count_all_results();

        return $jumlah;
    }

    // diambil di masyarakat/beranda
    function grafikKeluhanPerKategori() {
        return $this->db->query("SELECT kategori.Nama, COUNT(keluhan.KategoriID) Total 
                        FROM kategori
                        LEFT OUTER JOIN `keluhan` on keluhan.KategoriID=kategori.ID
                        GROUP BY kategori.Nama, keluhan.KategoriID");
    }
    
    function grafikKeluhanPerKota(){
        return $this->db->query('SELECT kotakabupaten.Nama, COUNT(keluhan.KodeTingkatan) Total
                                FROM kotakabupaten
                                LEFT OUTER JOIN keluhan on kotakabupaten.ID=keluhan.KodeTingkatan
                                where keluhan.Tipe="Kota"
                                GROUP BY kotakabupaten.Nama, kotakabupaten.ID');
    }
    function grafikKeluhanPerProvinsi(){
        return $this->db->query('SELECT provinsi.Nama, COUNT(keluhan.KodeTingkatan) Total
                                FROM provinsi
                                LEFT OUTER JOIN keluhan on provinsi.ID=keluhan.KodeTingkatan
                                where keluhan.Tipe="Provinsi"
                                GROUP BY provinsi.Nama, keluhan.KodeTingkatan');
    }
    function grafikKeluhanPerPusat(){
        return $this->db->query('SELECT pusat.Nama, COUNT(keluhan.KodeTingkatan) Total
                                FROM pusat
                                LEFT OUTER JOIN keluhan on pusat.ID=keluhan.KodeTingkatan
                                where keluhan.Tipe="Pusat"
                                GROUP BY pusat.Nama, keluhan.KodeTingkatan');
    }
    
    function ubah_statusKeluhan($id,$data){
        $this->db->where('ID',$id);
        $this->db->update('keluhan',$data);
    }
}
