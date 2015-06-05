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
    function updateUserPemerintah($id, $data) {
        $this->db->where('ID', $id);
        $this->db->update('Pemerintah', $data);
    }

    //insert User Pemerintah
    function insertPemerintah($data) {
        $this->db->insert('Pemerintah', $data);
    }

    //delete User Pemerintah
    function deleteUserPemerintah($id) {
        $this->db->where('ID', $id);
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

    function getTingkatPemerintah($tingkat) {
        switch ($tingkat) {
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
    function insertTingkatPemerintah($tingkat, $data) {
        switch ($tingkat) {
            case 1:
                $this->db->insert('KotaKabupaten', $data);
                break;
            case 2:
                $this->db->insert('Provinsi', $data);
                break;
            case 3:
                $this->db->insert('Pusat', $data);
                break;
        }
    }

    // administrator/tingkatkota,tingkatprovinsi,tingkatpusat
    function deleteTingkatPemerintah($tingkat, $id) {
        switch ($tingkat) {
            case 1:
                $this->db->delete('KotaKabupaten', $id);
                break;
            case 2:
                $this->db->delete('Provinsi', $id);
                break;
            case 3:
                $this->db->delete('Pusat', $id);
                break;
        }
    }

    function getEditUserPemerintah($id) {
        $this->db->select('*');
    }

    // untuk diambil di widget_right
    function getprofil($username) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('pemerintah', 'pemerintah.UserID=users.id');
        $this->db->where('users.email', $username);
        return $this->db->get();
    }

    // untuk diambil di widget_right
    function getCountKeluhan($kode_pemerintah, $tipe) {
        // status belum ditanggapi
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->where('Tipe', $tipe);
        $this->db->where('KodeTingkatan', $kode_pemerintah);
        $this->db->where('StatusKeluhan', 'Belum');
        $jumlah['belum'] = $this->db->count_all_results();

        // status belum ditanggapi
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->where('Tipe', $tipe);
        $this->db->where('KodeTingkatan', $kode_pemerintah);
        $this->db->where('StatusKeluhan', 'Proses');
        $jumlah['proses'] = $this->db->count_all_results();

        // status belum ditanggapi
        $this->db->select('*');
        $this->db->from('keluhan');
        $this->db->where('Tipe', $tipe);
        $this->db->where('KodeTingkatan', $kode_pemerintah);
        $this->db->where('StatusKeluhan', 'Selesai');
        $jumlah['selesai'] = $this->db->count_all_results();

        return $jumlah;
    }

    // diambil oleh auth/login untuk mengambil tipenya
    function ambil_tipe($userID) {
        $this->db->select('Tipe,KodePemerintah');
        $this->db->from('pemerintah');
        $this->db->where('UserID', $userID);
        $hasil = $this->db->get()->row_array();
        return $hasil;
    }
    
    function grafik_perkategori($kode_pemerintah,$tipe){
        return $this->db->query("SELECT kategori.Nama, COUNT(kategori.ID) AS Total
                        FROM kategori
                        LEFT OUTER JOIN keluhan ON keluhan.KategoriID=kategori.ID
                        WHERE keluhan.Tipe like '$tipe' AND keluhan.KodeTingkatan = $kode_pemerintah
                        GROUP BY kategori.ID, kategori.Nama");
    }
    
    // diambil pada pemerintah/keluhan sudah ditanggapi
    function getKeluhanSelesaiTanggap($kode_pemerintah,$tipe){
        return $this->db->query("SELECT tanggapan.IsiTanggapan,tanggapan.ID,keluhan.Judul,keluhan.IsiKeluhan,keluhan.Tanggal,keluhan.StatusKeluhan,kategori.Nama Kategori,masyarakat.Nama,keluhan.UserID,users.email 
                                FROM tanggapan
                                INNER JOIN keluhan on keluhan.ID=tanggapan.KeluhanID
                                INNER JOIN users on users.id=keluhan.UserID
                                INNER JOIN kategori on kategori.ID=keluhan.KategoriID
                                INNER JOIN masyarakat on users.id=masyarakat.UserID
                                WHERE keluhan.Tipe LIKE '$tipe' 
                                AND keluhan.KodeTingkatan = $kode_pemerintah AND keluhan.StatusKeluhan LIKE 'Selesai' order by tanggapan.ID DESC");
    }
    
    // diambil pada pemerintah/keluhan belum ditanggapi
    function getKeluhanBelumTanggap($kode_pemerintah,$tipe){
        return $this->db->query("SELECT keluhan.ID,keluhan.Judul,keluhan.IsiKeluhan,keluhan.Tanggal,keluhan.StatusKeluhan,kategori.Nama Kategori,masyarakat.Nama,keluhan.UserID,users.email 
                        FROM keluhan
                        INNER JOIN users on users.id=keluhan.UserID
                        INNER JOIN kategori on kategori.ID=keluhan.KategoriID
                        INNER JOIN masyarakat on users.id=masyarakat.UserID
                        WHERE keluhan.Tipe LIKE '$tipe'
                        AND keluhan.StatusKeluhan LIKE 'Belum'
                        AND keluhan.KodeTingkatan = $kode_pemerintah order by keluhan.ID DESC");
    }
    
    // diambil pada pemerintah/keluhan proses ditanggapi
    function getKeluhanProsesTanggap($kode_pemerintah,$tipe){
         return $this->db->query("SELECT tanggapan.IsiTanggapan,tanggapan.ID,keluhan.ID KeluhanID,keluhan.Judul,keluhan.IsiKeluhan,keluhan.Tanggal,keluhan.StatusKeluhan,kategori.Nama Kategori,masyarakat.Nama,keluhan.UserID,users.email
                                FROM tanggapan
                                INNER JOIN keluhan on keluhan.ID=tanggapan.KeluhanID
                                INNER JOIN users on users.id=keluhan.UserID
                                INNER JOIN kategori on kategori.ID=keluhan.KategoriID
                                INNER JOIN masyarakat on users.id=masyarakat.UserID
                                WHERE keluhan.Tipe LIKE '$tipe' 
                                AND keluhan.KodeTingkatan = $kode_pemerintah AND keluhan.StatusKeluhan LIKE 'Proses' order by tanggapan.ID DESC ");
    }
    
    // diambil pada pemerintah/keluhan/tanggapi/7
    function getKeluhanTanggapi($kode_pemerintah,$tipe,$id){
        return $this->db->query("SELECT keluhan.ID,keluhan.Judul,keluhan.IsiKeluhan,keluhan.Tanggal,keluhan.StatusKeluhan,kategori.Nama Kategori,masyarakat.Nama,keluhan.UserID,users.email 
                        FROM keluhan
                        INNER JOIN users on users.id=keluhan.UserID
                        INNER JOIN kategori on kategori.ID=keluhan.KategoriID
                        INNER JOIN masyarakat on users.id=masyarakat.UserID
                        WHERE keluhan.Tipe LIKE '$tipe'
                        AND keluhan.StatusKeluhan LIKE 'Belum'
                        AND keluhan.KodeTingkatan = $kode_pemerintah
                        AND keluhan.ID = $id");
    }
    
    // diambil oleh pemerintah/statistik/
    function grafik_perkota($kode){
        return $this->db->query("SELECT kotakabupaten.Nama, COUNT(keluhan.ID) Total 
                        FROM kotakabupaten
                        LEFT OUTER JOIN provinsi on provinsi.ID=kotakabupaten.ProvinsiID
                        LEFT JOIN keluhan on keluhan.KodeTingkatan=kotakabupaten.ID
                        WHERE provinsi.ID=$kode
                        GROUP BY kotakabupaten.ID,kotakabupaten.Nama");
    }
}
