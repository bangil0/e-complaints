<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of homepage
 *
 * @author Ihsan
 */
class homepage extends CI_Controller {
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
    }
    
    function index(){
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }
        
        // pemanggilan di header username
//        $user = $this->ion_auth->user()->row();
//        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
//        $groups = array();
//        foreach ($user_groups as $user_group) {
//            $groups[$user_group->id] = $user_group->name;
//        }
//
//        $this->smartyci->assign('user', $user);
//        $this->smartyci->assign('groups', $groups);

        $data = array(
            'kategori' => $this->comboboxmodel->getKategori(),
            'kota' => $this->comboboxmodel->getKotaKabupaten(),
            'provinsi' => $this->comboboxmodel->getProvinsi(),
            'pusat' => $this->comboboxmodel->getPusat(),
            'keluhan_terkini' => $this->keluhanmodel->getKeluhan()
        );

        $this->smartyci->assign('data', $data);
        $this->smartyci->display('homepage.tpl');
    }
}
