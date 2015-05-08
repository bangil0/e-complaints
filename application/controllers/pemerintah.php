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
        $this->load->model('comboboxmodel');
        $this->load->model('keluhanmodel');
    }
    
    function index(){
        $this->smartyci->display('pemerintah/beranda.tpl');
    }
    
    function tambahkategori(){
        //$this->load->view
    }
}
