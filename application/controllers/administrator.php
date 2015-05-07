<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Administrator extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent:: __construct();
        //$this->load->library('ion_auth');
        //$this->load->library('session');
        //$this->load->library('smartyci');
        // load table
        $this->load->model('tbl_halaman');
        $this->load->model('tbl_berita');
        $this->load->model('tbl_kategori');
        $this->load->model('tbl_pengujian');
        $this->load->model('tbl_administrator');
        $this->load->model('tbl_pembimbing');
        $this->load->model('tbl_kuesioner');
        $this->load->model('pemohon_m');

        $this->load->helper(array('url', 'form'));
    }

    function index() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Beranda',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => '0',
                    'username' => 'Ihsan Arif Rahman'),
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );
            $coba['card'] = 'ihsan';

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/index.tpl');
        }
    }

    // Menu Utama
    function halaman() {

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Halaman',
                    'menu' => array(
                        'menu_utama' => 1,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'halaman',
                    'username' => 'Ihsan Arif Rahman'),
                'data_halaman' => $this->tbl_halaman->viewall(),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );
            $coba['card'] = 'ihsan';

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_utama/halaman.tpl');
        }
    }

    function tatacara() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Tata Cara',
                    'menu' => array(
                        'menu_utama' => 1,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'tatacara',
                    'username' => 'Ihsan Arif Rahman'),
                'data_halaman' => $this->tbl_halaman->viewall(),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );
            $coba['card'] = 'ihsan';

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_utama/tatacara.tpl');
        }
    }

    function kontakkami() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Kontak Kami',
                    'menu' => array(
                        'menu_utama' => 1,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'kontakkami',
                    'username' => 'Ihsan Arif Rahman'),
                'data_halaman' => $this->tbl_halaman->viewall(),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );
            $coba['card'] = 'ihsan';

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_utama/kontakkami.tpl');
        }
    }

    // menu berita
    function berita() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Berita',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 1,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'berita',
                    'username' => 'Ihsan Arif Rahman'),
                'data_berita' => $this->tbl_berita->viewall(),
                'data_kategori' => $this->tbl_kategori->viewall(),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message'),
                'form' => array(
                    'judul' => array(
                        'name' => 'judul',
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Judul',
                        'type' => 'text',
                        'id' => 'judul'
                    ),
                    'tanggal' => array(
                        'name' => 'tanggal',
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Tanggal',
                        'type' => 'text',
                        'id' => 'tanggal'
                    ),
                    'penulis' => array(
                        'name' => 'penulis',
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan penulis',
                        'type' => 'text',
                        'id' => 'penulis',
                    ),
                    'isi' => array(
                        'name' => 'isi',
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Isi',
                        'type' => 'text',
                        'isi' => 'isi'
                    ),
                ),
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_berita/berita.tpl');
        }
    }

    function insert_berita() {
        $tables = $this->config->item('tables', 'ion_auth');
        //validate form input
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('judul', 'Judul Isi', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == true) {
            $data = array(
                'user_id' => $this->input->post('penulis'),
                'tanggal' => $this->input->post('tanggal'),
                'judul' => $this->input->post('judul'),
                'id_kategori' => $this->input->post('kategori'),
                'isi' => $this->input->post('isi')
            );

            $this->tbl_berita->insert($data);
        } else {
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->smartyci->assign('data', $data);
            $this->smartyci->display('layout/registrasi.tpl');
        }
    }

    function kategori_berita() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Kategori berita',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 1,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'kategoriberita',
                    'username' => 'Ihsan Arif Rahman'),
                'data_kategori' => $this->tbl_kategori->viewall(),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_berita/kategori_berita.tpl');
        }
    }

    function pengujian() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Pengujian',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'pengujian',
                    'username' => 'Ihsan Arif Rahman'),
                'data_pengujian' => $this->tbl_pengujian->viewall(),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/pengujian.tpl');
        }
    }

    // data pegawai
    function data_administrator() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Administrator',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 1,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'administrator',
                    'username' => 'Ihsan Arif Rahman'),
                'data_administrator' => $this->tbl_administrator->viewall(),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_pegawai/data_administrator.tpl');
        }
    }

    function data_bendahara() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Bendahara',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 1,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'bendahara',
                    'username' => 'Ihsan Arif Rahman'),
                'data_bendahara' => $this->tbl_pembimbing->viewall_jenis(5),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_pegawai/data_bendahara.tpl');
        }
    }

    function data_operator() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Operator',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 1,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'operator',
                    'username' => 'Ihsan Arif Rahman'),
                'data_operator' => $this->tbl_pembimbing->viewall_jenis(6),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_pegawai/data_operator.tpl');
        }
    }

    function data_pejabat() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Pejabat',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 1,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'pejabat',
                    'username' => 'Ihsan Arif Rahman'),
                'data_pejabat' => $this->tbl_pembimbing->viewall_jenis(4),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_pegawai/data_pejabat.tpl');
        }
    }

    function data_pembimbing() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Pembimbing',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 1,
                        'menu_layanan' => 0,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'pembimbing',
                    'username' => 'Ihsan Arif Rahman'),
                'data_pembimbing' => $this->tbl_pembimbing->viewall_jenis(2),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_pegawai/data_pembimbing.tpl');
        }
    }

    function pemohon() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Pemohon',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 1,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'pemohon',
                    'username' => 'Ihsan Arif Rahman'),
                'data_pemohon' => $this->pemohon_m->select_semua_status_verifikasi(),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_layanan/pemohon.tpl');
        }
    }

    function kuesioner() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $status1 = 1;
            $status2 = 2;
            $status3 = 3;
            $status4 = 4;
            $status5 = 5;

            $data = array(
                'meta' => array(
                    'title' => 'Data Kuesioner',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 1,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'kuesioner',
                    'username' => 'Ihsan Arif Rahman'),
                // nomor 1 Ketersediaan informasi Harapan
                'pilih111' => $this->tbl_kuesioner->ketersediaan_informasi_harapan($status1),
                'pilih112' => $this->tbl_kuesioner->ketersediaan_informasi_harapan($status2),
                'pilih113' => $this->tbl_kuesioner->ketersediaan_informasi_harapan($status3),
                'pilih114' => $this->tbl_kuesioner->ketersediaan_informasi_harapan($status4),
                'pilih115' => $this->tbl_kuesioner->ketersediaan_informasi_harapan($status5),
                'pilih121' => $this->tbl_kuesioner->ketersediaan_informasi_kondisi($status1),
                'pilih122' => $this->tbl_kuesioner->ketersediaan_informasi_kondisi($status2),
                'pilih123' => $this->tbl_kuesioner->ketersediaan_informasi_kondisi($status3),
                'pilih124' => $this->tbl_kuesioner->ketersediaan_informasi_kondisi($status4),
                'pilih125' => $this->tbl_kuesioner->ketersediaan_informasi_kondisi($status5),
                // nomor 2 kemudahan mendapatkan informasi
                'pilih211' => $this->tbl_kuesioner->kemudahan_informasi_harapan($status1),
                'pilih212' => $this->tbl_kuesioner->kemudahan_informasi_harapan($status2),
                'pilih213' => $this->tbl_kuesioner->kemudahan_informasi_harapan($status3),
                'pilih214' => $this->tbl_kuesioner->kemudahan_informasi_harapan($status4),
                'pilih215' => $this->tbl_kuesioner->kemudahan_informasi_harapan($status5),
                'pilih221' => $this->tbl_kuesioner->kemudahan_informasi_kondisi($status1),
                'pilih222' => $this->tbl_kuesioner->kemudahan_informasi_kondisi($status2),
                'pilih223' => $this->tbl_kuesioner->kemudahan_informasi_kondisi($status3),
                'pilih224' => $this->tbl_kuesioner->kemudahan_informasi_kondisi($status4),
                'pilih225' => $this->tbl_kuesioner->kemudahan_informasi_kondisi($status5),
                // nomor 3 kejelasan mendapatkan informasi
                'pilih311' => $this->tbl_kuesioner->kejelasan_informasi_harapan($status1),
                'pilih312' => $this->tbl_kuesioner->kejelasan_informasi_harapan($status2),
                'pilih313' => $this->tbl_kuesioner->kejelasan_informasi_harapan($status3),
                'pilih314' => $this->tbl_kuesioner->kejelasan_informasi_harapan($status4),
                'pilih315' => $this->tbl_kuesioner->kejelasan_informasi_harapan($status5),
                'pilih321' => $this->tbl_kuesioner->kejelasan_informasi_kondisi($status1),
                'pilih322' => $this->tbl_kuesioner->kejelasan_informasi_kondisi($status2),
                'pilih323' => $this->tbl_kuesioner->kejelasan_informasi_kondisi($status3),
                'pilih324' => $this->tbl_kuesioner->kejelasan_informasi_kondisi($status4),
                'pilih325' => $this->tbl_kuesioner->kejelasan_informasi_kondisi($status5),
                // nomor 4 kelengkapan informasi
                'pilih411' => $this->tbl_kuesioner->kelengkapan_informasi_harapan($status1),
                'pilih412' => $this->tbl_kuesioner->kelengkapan_informasi_harapan($status2),
                'pilih413' => $this->tbl_kuesioner->kelengkapan_informasi_harapan($status3),
                'pilih414' => $this->tbl_kuesioner->kelengkapan_informasi_harapan($status4),
                'pilih415' => $this->tbl_kuesioner->kelengkapan_informasi_harapan($status5),
                'pilih421' => $this->tbl_kuesioner->kelengkapan_informasi_kondisi($status1),
                'pilih422' => $this->tbl_kuesioner->kelengkapan_informasi_kondisi($status2),
                'pilih423' => $this->tbl_kuesioner->kelengkapan_informasi_kondisi($status3),
                'pilih424' => $this->tbl_kuesioner->kelengkapan_informasi_kondisi($status4),
                'pilih425' => $this->tbl_kuesioner->kelengkapan_informasi_kondisi($status5),
                // nomor 5 keragaman informasi
                'pilih511' => $this->tbl_kuesioner->keragaman_informasi_harapan($status1),
                'pilih512' => $this->tbl_kuesioner->keragaman_informasi_harapan($status2),
                'pilih513' => $this->tbl_kuesioner->keragaman_informasi_harapan($status3),
                'pilih514' => $this->tbl_kuesioner->keragaman_informasi_harapan($status4),
                'pilih515' => $this->tbl_kuesioner->keragaman_informasi_harapan($status5),
                'pilih521' => $this->tbl_kuesioner->keragaman_informasi_kondisi($status1),
                'pilih522' => $this->tbl_kuesioner->keragaman_informasi_kondisi($status2),
                'pilih523' => $this->tbl_kuesioner->keragaman_informasi_kondisi($status3),
                'pilih524' => $this->tbl_kuesioner->keragaman_informasi_kondisi($status4),
                'pilih525' => $this->tbl_kuesioner->keragaman_informasi_kondisi($status5),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_layanan/kuesioner.tpl');
        }
    }
    
    function internet(){
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Internet',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 1,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'layanan_internet',
                    'username' => 'Ihsan Arif Rahman'),
                'data_internet' => $this->pemohon_m->cetak_akun_internet(4),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_layanan/layanan_internet.tpl');
        }
    }
    
    function nametag(){
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Internet',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 1,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'nametag',
                    'username' => 'Ihsan Arif Rahman'),
                'data_nametag' => $this->pemohon_m->belum_verifikasi(4),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_layanan/name_tag.tpl');
        }
    }
    
    function nilai(){
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Internet',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 1,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'nilai',
                    'username' => 'Ihsan Arif Rahman'),
                'data_nilai' => $this->pemohon_m->belum_verifikasi(4),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_layanan/nilai_mahasiswa.tpl');
        }
    }
    
    function surat(){
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/login');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            $data = array(
                'meta' => array(
                    'title' => 'Data Internet',
                    'menu' => array(
                        'menu_utama' => 0,
                        'menu_berita' => 0,
                        'menu_pesan' => 0,
                        'menu_pegawai' => 0,
                        'menu_layanan' => 1,
                        'menu_layanan2' => 0
                    ),
                    'sub_menu' => 'surat',
                    'username' => 'Ihsan Arif Rahman'),
                'data_surat' => $this->pemohon_m->belum_verifikasi(4),
                'no' => 1,
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/menu_layanan/surat_mahasiswa.tpl');
        }
    }
    
    function contoh_ajax() {
        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);

        $data = array(
            'meta' => array(
                'title' => 'Data Bendahara',
                'menu' => array(
                    'menu_utama' => 0,
                    'menu_berita' => 0,
                    'menu_pesan' => 0,
                    'menu_pegawai' => 1,
                    'menu_layanan' => 0,
                    'menu_layanan2' => 0
                ),
                'sub_menu' => 'bendahara',
                'username' => 'Ihsan Arif Rahman'),
            'no' => 1,
            'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message'),
            'form' => array(
                'nama' => array(
                    'name' => 'nama_pemohon',
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan Judul',
                    'type' => 'text',
                    'id' => 'nama'
                ),
                'npm' => array(
                    'name' => 'npm',
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan npm',
                    'type' => 'text',
                    'id' => 'npm'
                ),
            ),
        );

        $this->smartyci->assign('data', $data);
        $this->smartyci->display('administrator/contoh_ajax.tpl');
    }

    public function getList() {
        $db = $this->db->get('pemohon');
        if ($db->num_rows() == 0) {
            echo '<tr><td colspan="4">Masih Kosong</td></tr>';
        } else {
            foreach ($db->result_object() as $row) {
                echo '<tr>';
                echo '<td>' . $row->id . '</td>';
                echo '<td>' . $row->nama_pemohon . '</td>';
                echo '<td>' . $row->npm . '</td>';
                echo '<td width="140">';

                // EDIT BUTTON
                echo '<a onclick="editUser(' . $row->id . ', ' . $row->nama_pemohon . ', ' . $row->npm . ')" class="btn btn-success btn-sm" href="#">Edit</a>';
                // DELETE BUTTON
                echo '<a onclick="setUserDeleteId(' . $row->id . ')" data-toggle="modal" class="btn btn-danger btn-sm" href="#modal_confirm">Hapus</a>';
                echo '</td>';
                echo '</tr>';
            }
        }
    }

    public function simpan() {
        $this->form_validation->set_rules('nama_pemohon', 'Nama', 'required|xss_clean|trim');
        $this->form_validation->set_rules('npm', 'NPM', 'required|xss_clean|trim');

        if ($this->form_validation->run()) {
            if (isset($_POST['id']) && $_POST['id'] != '') {
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('pemohon', $this->input->post(NULL, true));
            } else {
                $this->db->insert('pemohon', $this->input->post(NULL, true));
            }
            echo json_encode(array('status' => 'success', 'msg' => 'Berhasil'));
        } else {
            echo json_encode(array('status' => 'error', 'msg' => validation_errors()));
        }
    }

}
