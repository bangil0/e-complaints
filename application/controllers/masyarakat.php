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
        $this->load->model('comboboxmodel');
        $this->load->model('keluhanmodel');
    }

    function index() {
        /* if (!$this->ion_auth->logged_in()) {
          //redirect them to the login page
          //$this->session->set_flashdata('message', "Anda Belum Login");
          //redirect('auth/login', 'refresh');
          $data = array (
          'kategori'=> $this->kategoriModel->getKategori()
          );
          $this->smartyci->assign('data',$data);
          $this->smartyci->display('masyarakat/beranda.tpl');
          } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
          //redirect them to the home page because they must be an administrator to view this
          $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
          redirect('auth/login');
          } else { */
        $data = array(
            'kategori' => $this->comboboxmodel->getKategori(),
            'kota' => $this->comboboxmodel->getKotaKabupaten(),
            'provinsi' => $this->comboboxmodel->getProvinsi(),
            'pusat' => $this->comboboxmodel->getPusat(),
            'keluhan_terkini'=>$this->keluhanmodel->getKeluhan()
        );
        
        $this->smartyci->assign('data', $data);
        $this->smartyci->display('masyarakat/index.tpl');
        //}
    }

    function insert() {
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
        $data = array (
        'isiKeluhan' => $this->input->post('isikeluhan'),
        'Tanggal' => date("Y-m-d H:i:s"),
        'StatusKeluhan' => "Belum",
        'KodeTingkatan' => $kodeTingkatan,
        'tipe' => $tipe,
        'UserID' => 4,
        'kategoriID' => $this->input->post('kategori_keluhan')
        );
        
        $this->keluhanmodel->insert($data);
        redirect('masyarakat','refresh');
    }

    //function beranda(){
    //     $this->smartyci->display('masyarakat/beranda.tpl');
    //}
    function terimakasih(){
        echo "wassalamualaikum";
        echo 'masuk ga?';
    }
}