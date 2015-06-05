<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of masyarakat
 *
 * @author ihsanarifr
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class masyarakat extends CI_Controller {

    //put your code here
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
        $this->load->helper(array('url', 'form'));

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");

            $status = false; // cek status
            $this->smartyci->assign('status', $status);
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->in_group(4)) {
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);
    }

    function index() {
        $username = $this->session->userdata('username');
        $data = array(
            'identitas' => $this->masyarakatmodel->getprofil($username), // di widget
            'jumlah_keluhan' => $this->masyarakatmodel->getCountKeluhan($username), // di widget
            'kategori' => $this->comboboxmodel->getKategori(),
            'kota' => $this->comboboxmodel->getKotaKabupaten(),
            'provinsi' => $this->comboboxmodel->getProvinsi(),
            'pusat' => $this->comboboxmodel->getPusat(),
            'keluhan_terkini' => $this->keluhanmodel->getKeluhanMasyarakat(),
        );

        $this->smartyci->assign('data', $data);
        $this->smartyci->display('masyarakat/beranda.tpl');
    }

    function insert() {
        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        if ($this->input->post('rdtingkat') == 1) {
            $tipe = "Kota";
            $kodeTingkatan = $this->input->post('kota');
        } elseif ($this->input->post('rdtingkat') == 2) {
            $tipe = "Provinsi";
            $kodeTingkatan = $this->input->post('provinsi');
        } else {
            $tipe = "Pusat";
            $kodeTingkatan = $this->input->post('pusat');
        }
        $data = array(
            'Judul' => $this->input->post('judul'),
            'isiKeluhan' => $this->input->post('isikeluhan'),
            'Tanggal' => date("Y-m-d H:i:s"),
            'StatusKeluhan' => "Belum",
            'KodeTingkatan' => $kodeTingkatan,
            'tipe' => $tipe,
            'UserID' => $user->id,
            'kategoriID' => $this->input->post('kategori_keluhan')
        );

        $this->keluhanmodel->insert($data);
        redirect('masyarakat', 'refresh');
    }

    function profil($action = NULL, $value = NULL) {
        switch ($action) {
            case 'edit':
                $username = $this->session->userdata('username');
                $data['identitas'] = $this->masyarakatmodel->getprofil($username); // di widget
                $data['jumlah_keluhan'] = $this->masyarakatmodel->getCountKeluhan($username); // di widget

                $this->form_validation->set_rules('nama', 'Nama Identitas', 'required|xss_clean');
                $this->form_validation->set_rules('telepon', 'Telepon', 'requred|xss_clean');
                $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'requred|xss_clean');
                $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'requred|xss_clean');
                $this->form_validation->set_rules('no_identitas', 'No Identitas', 'requred|xss_clean');

                if ($this->form_validation->run() == TRUE) {
                    $data = array(
                        'Nama' => $this->input->post('nama'),
                        'Telepon' => $this->input->post('telepon'),
                        'photo' => $this->upload->file_name,
                        'JenisKelamin' => $this->input->post('jenis_kelamin'),
                        'TanggalLahir' => 'tgl_lahir',
                        'NoIdentitas' => $this->input->post('no_identitas'),
                    );
                    $this->masyarakatmodel->edit($value, $data);

                    redirect('masyarakat/profil', 'refresh');
                    break;
                } else {
                    if (empty($value)) {
                        redirect('masyarakat/profil', 'refresh');
                    }
                    // ambil data user 
                    $query = $this->masyarakatmodel->getUserMasyarakatEdit($value);
                    $isi = $query->row();
                    // ambil dengan method 

                    $data['nama'] = array(
                        'name' => 'nama',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nama Identitas',
                        'value' => ($isi->Nama == "" ? $this->form_validation->set_value('nama') : $isi->Nama)
                    );
                    $data['telepon'] = array(
                        'name' => 'telepon',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nomor Telepon',
                        'value' => ($isi->Telepon == "" ? $this->form_validation->set_value('nama') : $isi->telepon)
                    );
                    $data['jenis_kelamin'] = array(
                        'name' => 'jenis_kelamin',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Jenis Kelamin',
                        'value' => ($isi->JenisKelamin == "" ? $this->form_validation->set_value('nama') : $isi->JenisKelamin)
                    );
                    $data['tgl_lahir'] = array(
                        'name' => 'tgl_lahir',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik tanggal Lahir',
                        'value' => ($isi->TanggalLahir == "" ? $this->form_validation->set_value('tgl_lahir') : $isi->TanggalLahir)
                    );
                    $data['no_identitas'] = array(
                        'name' => 'no_identitas',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nomor Idetitas seperti: KTP,SIM',
                        'value' => ($isi->NoIdentitas == "" ? $this->form_validation->set_value('no_identitas') : $isi->NoIdentitas)
                    );

                    // ngambil id untuk ke alamat form_open
                    $data['id'] = $isi->ID;

                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('masyarakat/edit_profil.tpl');
                }
            default :
                $username = $this->session->userdata('username');
                $data = array(
                    'jumlah_keluhan' => $this->masyarakatmodel->getCountKeluhan($username), // di widget
                    'identitas' => $this->masyarakatmodel->getprofil($username)
                );
                $this->smartyci->assign('data', $data);
                $this->smartyci->display('masyarakat/profil.tpl');
        }
    }

    function keluhan() {
        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);

        $username = $this->session->userdata('username');
        $data = array(
            'identitas' => $this->masyarakatmodel->getprofil($username), // di widget
            'jumlah_keluhan' => $this->masyarakatmodel->getCountKeluhan($username), // di widget
            'keluhan_terkini' => $this->keluhanmodel->getKeluhanMasyarakatUser($user->id), // di konten
            'grafik_keluhan' => $this->keluhanmodel->grafikKeluhanUser($user->id)
        );

        $this->smartyci->assign('data', $data);
        $this->smartyci->display('masyarakat/keluhan_saya.tpl');
        //}
    }

    function kebijakan() {
        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);

        $username = $this->session->userdata('username');
        $data = array(
            'identitas' => $this->masyarakatmodel->getprofil($username), // di widget
            'jumlah_keluhan' => $this->masyarakatmodel->getCountKeluhan($username), // di widget
        );

        $this->smartyci->assign('data', $data);
        $this->smartyci->display('masyarakat/kebijakan.tpl');
    }

    function panduan() {
        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);

        $username = $this->session->userdata('username');
        $data = array(
            'identitas' => $this->masyarakatmodel->getprofil($username), // di widget
            'jumlah_keluhan' => $this->masyarakatmodel->getCountKeluhan($username), // di widget
        );

        $this->smartyci->assign('data', $data);
        $this->smartyci->display('masyarakat/panduan.tpl');
    }

    function grafik() {
        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);

        $username = $this->session->userdata('username');
        $data = array(
            'identitas' => $this->masyarakatmodel->getprofil($username), // di widget
            'jumlah_keluhan' => $this->masyarakatmodel->getCountKeluhan($username), // di widget
            'grafik_perkategori' => $this->keluhanmodel->grafikKeluhanPerKategori(),
            'grafik_perkota' => $this->keluhanmodel->grafikKeluhanPerKota(),
            'grafik_perprovinsi'=>$this->keluhanmodel->grafikKeluhanPerProvinsi(),
            'grafik_perpusat'=>$this->keluhanmodel->grafikKeluhanPerPusat(),
        );

        $this->smartyci->assign('data', $data);
        $this->smartyci->display('masyarakat/grafik.tpl');
    }

    function test() {
        $this->masyarakatmodel->getCountKeluhan($this->session->userdata('username'));
    }

}
