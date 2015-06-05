<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class pemerintah extends CI_Controller {

    function __construct() {
        parent:: __construct();
        //$this->load->library('ion_auth');
        //$this->load->library('session');
        //$this->load->library('smartyci');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('upload');
        // load table
        $this->load->model('comboboxmodel');
        $this->load->model('pemerintahmodel');
        $this->load->model('keluhanmodel');
        $this->load->model('usermodel');
        $this->load->model('ion_auth_model');
        $this->load->model('masyarakatmodel');
        $this->load->model('kategorimodel');
        $this->load->model('tanggapanmodel');
        $this->load->helper(array('url', 'form'));

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->in_group(3)) {
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        }
    }

    function index() {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        // ambil tipe pemerintahan
        $tipe = $this->session->userdata('tipe');
        $kode_pemerintah = $this->session->userdata('kode_pemerintah');

        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $username = $user->email;
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $data = array(
            'kategori' => $this->comboboxmodel->getKategori_dropdown(),
            'identitas' => $this->pemerintahmodel->getprofil($username), // di widget
            'jumlah_keluhan' => $this->pemerintahmodel->getCountKeluhan($kode_pemerintah, $tipe), // di widget dan grafik
            'grafik_perkategori' => $this->pemerintahmodel->grafik_perkategori($kode_pemerintah, $tipe), // grafik
        );
        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);
        $this->smartyci->assign('data', $data);
        $this->smartyci->display('pemerintah/beranda.tpl');
    }

    function keluhan($action = NULL, $value = NULL) {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        // ambil tipe pemerintahan
        $tipe = $this->session->userdata('tipe');
        $kode_pemerintah = $this->session->userdata('kode_pemerintah');

        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $username = $user->email;
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        if ($action == "tanggapi") {
            $data = array(
                'kategori' => $this->comboboxmodel->getKategori_dropdown(),
                'identitas' => $this->pemerintahmodel->getprofil($username), // di widget
                'jumlah_keluhan' => $this->pemerintahmodel->getCountKeluhan($kode_pemerintah, $tipe), // di widget dan grafik
                'keluhan_tanggapi' => $this->pemerintahmodel->getKeluhanTanggapi($kode_pemerintah, $tipe, $value),
            );

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);
            $this->smartyci->assign('data', $data);
            $this->smartyci->display('pemerintah/keluhan_tanggapi.tpl');
        } else {
            $data = array(
                'kategori' => $this->comboboxmodel->getKategori_dropdown(),
                'identitas' => $this->pemerintahmodel->getprofil($username), // di widget
                'jumlah_keluhan' => $this->pemerintahmodel->getCountKeluhan($kode_pemerintah, $tipe), // di widget dan grafik
                'keluhan_belum' => $this->pemerintahmodel->getKeluhanBelumTanggap($kode_pemerintah, $tipe),
                'keluhan_proses' => $this->pemerintahmodel->getKeluhanProsesTanggap($kode_pemerintah, $tipe),
                'keluhan_selesai' => $this->pemerintahmodel->getKeluhanSelesaiTanggap($kode_pemerintah, $tipe),
            );
            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);
            $this->smartyci->assign('data', $data);
            $this->smartyci->display('pemerintah/keluhan.tpl');
        }
    }

    function history() {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        // ambil tipe pemerintahan
        $tipe = $this->session->userdata('tipe');
        $kode_pemerintah = $this->session->userdata('kode_pemerintah');

        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $username = $user->email;
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }
        
        $data = array(
            'kategori' => $this->comboboxmodel->getKategori_dropdown(),
            'identitas' => $this->pemerintahmodel->getprofil($username), // di widget
            'jumlah_keluhan' => $this->pemerintahmodel->getCountKeluhan($kode_pemerintah, $tipe), // di widget dan grafik
            'keluhan_belum' => $this->pemerintahmodel->getKeluhanBelumTanggap($kode_pemerintah, $tipe),
            'keluhan_proses' => $this->pemerintahmodel->getKeluhanProsesTanggap($kode_pemerintah, $tipe),
            'keluhan_selesai' => $this->pemerintahmodel->getKeluhanSelesaiTanggap($kode_pemerintah, $tipe),
        );
        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);
        $this->smartyci->assign('data', $data);
        $this->smartyci->display('pemerintah/history_tanggapan.tpl');
    }

    function statistik() {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        // ambil tipe pemerintahan
        $tipe = $this->session->userdata('tipe');
        $kode_pemerintah = $this->session->userdata('kode_pemerintah');

        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $username = $user->email;
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);

        switch ($tipe) {
            case 'Kota':
                $data = array(
                    'kategori' => $this->comboboxmodel->getKategori_dropdown(),
                    'identitas' => $this->pemerintahmodel->getprofil($username), // di widget
                    'jumlah_keluhan' => $this->pemerintahmodel->getCountKeluhan($kode_pemerintah, $tipe), // di widget dan grafik
                    'grafik_perkategori' => $this->pemerintahmodel->grafik_perkategori($kode_pemerintah, $tipe), // grafik
                );
                $this->smartyci->assign('data', $data);
                $this->smartyci->display('pemerintah/statistik.tpl');
                break;
            case 'Provinsi':
                $data = array(
                    'kategori' => $this->comboboxmodel->getKategori_dropdown(),
                    'identitas' => $this->pemerintahmodel->getprofil($username), // di widget
                    'jumlah_keluhan' => $this->pemerintahmodel->getCountKeluhan($kode_pemerintah, $tipe), // di widget dan grafik
                    'grafik_perkategori' => $this->pemerintahmodel->grafik_perkategori($kode_pemerintah, $tipe), // grafik
                    'grafik_perkota'=> $this->pemerintahmodel->grafik_perkota($kode_pemerintah),
                );
                $this->smartyci->assign('data', $data);
                $this->smartyci->display('pemerintah/statistik_provinsi.tpl');
                break;
            case 'Pusat':
                $data = array(
                    'kategori' => $this->comboboxmodel->getKategori_dropdown(),
                    'identitas' => $this->pemerintahmodel->getprofil($username), // di widget
                    'jumlah_keluhan' => $this->pemerintahmodel->getCountKeluhan($kode_pemerintah, $tipe), // di widget dan grafik
                    'grafik_perkategori' => $this->pemerintahmodel->grafik_perkategori($kode_pemerintah, $tipe), // grafik
                );
                $this->smartyci->assign('data', $data);
                $this->smartyci->display('pemerintah/statistik_pusat.tpl');
                break;
        }
    }

    function kebijakan() {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        // ambil tipe pemerintahan
        $tipe = $this->session->userdata('tipe');
        $kode_pemerintah = $this->session->userdata('kode_pemerintah');

        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $username = $user->email;
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $data = array(
            'kategori' => $this->comboboxmodel->getKategori_dropdown(),
            'identitas' => $this->pemerintahmodel->getprofil($username), // di widget
            'jumlah_keluhan' => $this->pemerintahmodel->getCountKeluhan($kode_pemerintah, $tipe), // di widget dan grafik
            'grafik_perkategori' => $this->pemerintahmodel->grafik_perkategori($kode_pemerintah, $tipe), // grafik
        );
        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);
        $this->smartyci->assign('data', $data);
        $this->smartyci->display('pemerintah/kebijakan.tpl');
    }

    function tanggapi() {
        $data_tanggapi = array(
            'KeluhanID' => $this->input->post('KeluhanID'),
            'IsiTanggapan' => $this->input->post('isi_tanggapan'),
            'Status' => $this->session->userdata('tipe'),
            'Tanggal' => date("Y-m-d H:i:s"),
        );
        $this->tanggapanmodel->insert($data_tanggapi);
        $data_ubah_status_keluhan = array(
            'StatusKeluhan' => $this->input->post('StatusKeluhan')
        );
        $this->keluhanmodel->ubah_statusKeluhan($this->input->post('KeluhanID'), $data_ubah_status_keluhan);
    }

    function ubah_status_keluhan($action = NULL) {
        if ($action != null) {
            $data_ubah_status_keluhan = array(
                'StatusKeluhan' => 'Selesai'
            );
            $this->keluhanmodel->ubah_statusKeluhan($action, $data_ubah_status_keluhan);
            redirect('pemerintah/keluhan');
        } else {
            echo "tidak ada";
        }
    }

    function test() {
        //echo $this->pemerintahmodel->ambil_tipe(11);
        echo $this->input->post('KeluhanID');
        echo $this->input->post('StatusKeluhan');
        echo $this->input->post('isi_tanggapan');
        redirect('pemerintah');
        //echo $this->session->userdata('kode_pemerintah');
    }

}
