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

    function index() {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
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
                'keluhan' => $this->keluhanmodel->getJumlahKeluhan(),
                'users' => $this->usermodel->getJumlahUser(),
                'message' => (validation_errors()) ? validation_errors() : $this->session->flashdata('message')
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/beranda.tpl');
        }
    }

    function pemerintahkota($action = NULL, $value = NULL) {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            // saat edit ambil data sesuai dengan set value
            $data['PemerintahKota'] = $this->pemerintahmodel->getUserPemerintah(1);

            $this->form_validation->set_rules('nama', 'Nama Identitas', 'required|xss_clean');
            //$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
            $this->form_validation->set_rules('kode_pemerintah', 'Kode Pemerintahan', 'required|xss_clean');
            $this->form_validation->set_rules('logo', 'Logo', 'callback_image_upload');
            $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
            $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required');

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            switch ($action) {
                case 'insert':
                    if ($this->form_validation->run() == TRUE) {

                        $username = $this->input->post('email');
                        $password = $this->input->post('password');

                        $group = array('3'); // Sets user to admin. No need for array('1', '2') as user is always set to member by default

                        $additional_data = array(
                            'photo' => $this->input->post('logo'),
                                //'pemohon_id' => $this->db->insert_id(),
                        );

                        if ($this->ion_auth->register($username, $password, $username, $additional_data, $group) == true) {
                            $data = array(
                                'Nama' => $this->input->post('nama'),
                                'Email' => $this->input->post('email'),
                                'Logo' => $this->upload->file_name,
                                //'password' => $this->input->post('password'),
                                'KodePemerintah' => $this->input->post('kode_pemerintah'),
                                'Tipe' => 'Kota',
                                'UserID' => $this->pemerintahmodel->getLastID()
                            );
                            $this->pemerintahmodel->insertPemerintah($data);

                            // notifikasi sudah ada
                            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Sudah tersimpan');
                        }
                        //$this->pemerintahmodel->insert($data);
                        redirect('administrator/pemerintahkota', 'refresh');
                        //echo "success";
                        //break;
                    } else {
                        $data['nama'] = array(
                            'name' => 'nama',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Nama Identitas',
                            'value' => $this->form_validation->set_value('nama')
                        );

                        $data['email'] = array(
                            'name' => 'email',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik email',
                            'value' => $this->form_validation->set_value('email')
                        );
                        $data['logo'] = array(
                            'name' => 'logo',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Logo',
                            'type' => 'file',
                            'value' => $this->form_validation->set_value('logo')
                        );
                        $data['password'] = array(
                            'name' => 'password',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Passoword',
                            'type' => 'password',
                            'value' => $this->form_validation->set_value('password')
                        );
                        $data['kode_pemerintah'] = array(
                            'option' => $this->comboboxmodel->getKota_dropdown(),
                            'name' => 'kode_pemerintah',
                            'diseleksi' => $this->form_validation->set_value('id_kategori')
                        );
                        $data['password_confirm'] = array(
                            'name' => 'password_confirm',
                            'class' => 'form-control',
                            'type' => 'password',
                            'placeholder' => 'Konfirmasi Password',
                            'value' => $this->form_validation->set_value('password_confirm'),
                        );

                        $this->smartyci->assign('data', $data);
                        $this->smartyci->display('administrator/user_pemerintah/insert_pemerintahkota.tpl');
                        break;
                    }
                case 'edit':
                    $this->form_validation->set_rules('password_lama', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']');

                    if ($this->form_validation->run() == true) {
                        $password = $this->input->post('password_lama');
                        $UserID = $this->input->post('UserID');
                        $id = $this->input->post('ID');

                        $data = array(
                            'Nama' => $this->input->post('nama'),
                            'Email' => $this->input->post('email'),
                            'Logo' => $this->upload->file_name,
                            //'password' => $this->input->post('password'),
                            'KodePemerintah' => $this->input->post('kode_pemerintah'),
                            'Tipe' => 'Kota',
                            'UserID' => $this->input->post('UserID'),
                        );

                        $ionauth = array(
                            'email' => $this->input->post('email'),
                            'password' => $this->input->post('password'),
                        );

                        //if ($this->ion_auth->hash_password_db($UserID, $password) != true) {
                        //$data['message'] = $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
                        //    redirect('administrator/pemerintahkota/edit/' . $id . '');
                        //}
                        // update 
                        $this->pemerintahmodel->updateUserPemerintah($id, $data);
                        $this->ion_auth_model->update($UserID, $ionauth);

                        redirect('administrator/pemerintahkota', 'refresh');
                        break;
                    } else {
                        if (empty($value)) {
                            redirect('administrator/pemerintahkota', 'refresh');
                        }
                        // ambil data user pemerintah kota sesuai dengan id
                        $query = $this->pemerintahmodel->getUserPemerintahEdit($value);
                        $kota = $query->row();
                        // ambil dengan method 

                        $data['nama'] = array(
                            'name' => 'nama',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Nama Identitas',
                            'value' => ($kota->Nama == "" ? $this->form_validation->set_value('nama') : $kota->Nama)
                        );

                        $data['email'] = array(
                            'name' => 'email',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik email',
                            'value' => ($kota->Email == "" ? $this->form_validation->set_value('email') : $kota->Email)
                        );
                        $data['logo'] = array(
                            'name' => 'logo',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Logo',
                            'type' => 'file',
                            'value' => ($kota->Logo == "" ? $this->form_validation->set_value('logo') : $kota->Logo)
                        );
                        $data['password_lama'] = array(
                            'name' => 'password_lama',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Password Lama',
                            'type' => 'text',
                            'value' => $this->form_validation->set_value('password_lama')
                        );
                        $data['password'] = array(
                            'name' => 'password',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Passoword',
                            'type' => 'password',
                            'value' => $this->form_validation->set_value('password')
                        );
                        $data['kode_pemerintah'] = array(
                            'option' => $this->comboboxmodel->getKota_dropdown(),
                            'name' => 'kode_pemerintah',
                            'diseleksi' => ($kota->KodePemerintah == "" ? $this->form_validation->set_value('kode_pemerintah') : $kota->KodePemerintah)
                        );
                        $data['password_confirm'] = array(
                            'name' => 'password_confirm',
                            'class' => 'form-control',
                            'type' => 'password',
                            'placeholder' => 'Konfirmasi Password',
                            'value' => $this->form_validation->set_value('password_confirm'),
                        );

                        // ngambil id untuk ke alamat form_open
                        $data['id'] = $kota->ID;
                        $data['UserID'] = $kota->UserID;

                        $this->smartyci->assign('data', $data);
                        $this->smartyci->display('administrator/user_pemerintah/edit_pemerintahkota.tpl');
                        break;
                    }
                case 'delete':
                    $UserID = $this->input->get('user');
                    //echo $UserID;
                    //echo $value;
                    $this->ion_auth->delete_user($UserID);
                    $this->pemerintahmodel->deleteUserPemerintah($value);
                    redirect('administrator/pemerintahkota', 'refresh');
                    break;
                default :
                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/user_pemerintah/pemerintah_kota.tpl');
            }
        }
    }

    function pemerintahprovinsi($action = NULL, $value = NULL) {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            // saat edit ambil data sesuai dengan set value
            $data['PemerintahProvinsi'] = $this->pemerintahmodel->getUserPemerintah(2);

            $this->form_validation->set_rules('nama', 'Nama Identitas', 'required|xss_clean');
            //$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
            $this->form_validation->set_rules('kode_pemerintah', 'Kode Pemerintahan', 'required|xss_clean');
            $this->form_validation->set_rules('logo', 'Logo', 'callback_image_upload');
            $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
            $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required');

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            switch ($action) {
                case 'insert':
                    if ($this->form_validation->run() == TRUE) {

                        $username = $this->input->post('email');
                        $password = $this->input->post('password');

                        $group = array('3'); // Sets user to admin. No need for array('1', '2') as user is always set to member by default

                        $additional_data = array(
                            'photo' => $this->input->post('logo'),
                                //'pemohon_id' => $this->db->insert_id(),
                        );

                        if ($this->ion_auth->register($username, $password, $username, $additional_data, $group) == true) {
                            $data = array(
                                'Nama' => $this->input->post('nama'),
                                'Email' => $this->input->post('email'),
                                'Logo' => $this->upload->file_name,
                                //'password' => $this->input->post('password'),
                                'KodePemerintah' => $this->input->post('kode_pemerintah'),
                                'Tipe' => 'Provinsi',
                                'UserID' => $this->pemerintahmodel->getLastID()
                            );
                            $this->pemerintahmodel->insertPemerintah($data);

                            // notifikasi sudah ada
                            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Sudah tersimpan');
                        }
                        //$this->pemerintahmodel->insert($data);
                        redirect('administrator/pemerintahprovinsi', 'refresh');
                        //echo "success";
                        //break;
                    } else {
                        $data['nama'] = array(
                            'name' => 'nama',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Nama Identitas',
                            'value' => $this->form_validation->set_value('nama')
                        );

                        $data['email'] = array(
                            'name' => 'email',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik email',
                            'value' => $this->form_validation->set_value('email')
                        );
                        $data['logo'] = array(
                            'name' => 'logo',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Logo',
                            'type' => 'file',
                            'value' => $this->form_validation->set_value('logo')
                        );
                        $data['password'] = array(
                            'name' => 'password',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Passoword',
                            'type' => 'password',
                            'value' => $this->form_validation->set_value('password')
                        );
                        $data['kode_pemerintah'] = array(
                            'option' => $this->comboboxmodel->getProvinsi_dropdown(),
                            'name' => 'kode_pemerintah',
                            'diseleksi' => $this->form_validation->set_value('id_kategori')
                        );
                        $data['password_confirm'] = array(
                            'name' => 'password_confirm',
                            'class' => 'form-control',
                            'type' => 'password',
                            'placeholder' => 'Konfirmasi Password',
                            'value' => $this->form_validation->set_value('password_confirm'),
                        );

                        $this->smartyci->assign('data', $data);
                        $this->smartyci->display('administrator/user_pemerintah/insert_pemerintahprovinsi.tpl');
                        break;
                    }
                case 'edit':
                    $this->form_validation->set_rules('password_lama', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']');

                    if ($this->form_validation->run() == true) {
                        $password = $this->input->post('password_lama');
                        $UserID = $this->input->post('UserID');
                        $id = $this->input->post('ID');

                        $data = array(
                            'Nama' => $this->input->post('nama'),
                            'Email' => $this->input->post('email'),
                            'Logo' => $this->upload->file_name,
                            //'password' => $this->input->post('password'),
                            'KodePemerintah' => $this->input->post('kode_pemerintah'),
                            'Tipe' => 'Provinsi',
                            'UserID' => $this->input->post('UserID'),
                        );

                        $ionauth = array(
                            'email' => $this->input->post('email'),
                            'password' => $this->input->post('password'),
                        );

                        //if ($this->ion_auth->hash_password_db($UserID, $password) != true) {
                        //$data['message'] = $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
                        //    redirect('administrator/pemerintahkota/edit/' . $id . '');
                        //}
                        // update 
                        $this->pemerintahmodel->updateUserPemerintah($id, $data);
                        $this->ion_auth_model->update($UserID, $ionauth);

                        redirect('administrator/pemerintahprovinsi', 'refresh');
                        break;
                    } else {
                        if (empty($value)) {
                            redirect('administrator/pemerintahprovinsi', 'refresh');
                        }
                        // ambil data user pemerintah kota sesuai dengan id
                        $query = $this->pemerintahmodel->getUserPemerintahEdit($value);
                        $provinsi = $query->row();
                        // ambil dengan method 

                        $data['nama'] = array(
                            'name' => 'nama',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Nama Identitas',
                            'value' => ($provinsi->Nama == "" ? $this->form_validation->set_value('nama') : $provinsi->Nama)
                        );

                        $data['email'] = array(
                            'name' => 'email',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik email',
                            'value' => ($provinsi->Email == "" ? $this->form_validation->set_value('email') : $provinsi->Email)
                        );
                        $data['logo'] = array(
                            'name' => 'logo',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Logo',
                            'type' => 'file',
                            'value' => ($provinsi->Logo == "" ? $this->form_validation->set_value('logo') : $provinsi->Logo)
                        );
                        $data['password_lama'] = array(
                            'name' => 'password_lama',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Password Lama',
                            'type' => 'text',
                            'value' => $this->form_validation->set_value('password_lama')
                        );
                        $data['password'] = array(
                            'name' => 'password',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Passoword',
                            'type' => 'password',
                            'value' => $this->form_validation->set_value('password')
                        );
                        $data['kode_pemerintah'] = array(
                            'option' => $this->comboboxmodel->getProvinsi_dropdown(),
                            'name' => 'kode_pemerintah',
                            'diseleksi' => ($provinsi->KodePemerintah == "" ? $this->form_validation->set_value('kode_pemerintah') : $provinsi->KodePemerintah)
                        );
                        $data['password_confirm'] = array(
                            'name' => 'password_confirm',
                            'class' => 'form-control',
                            'type' => 'password',
                            'placeholder' => 'Konfirmasi Password',
                            'value' => $this->form_validation->set_value('password_confirm'),
                        );

                        // ngambil id untuk ke alamat form_open
                        $data['id'] = $provinsi->ID;
                        $data['UserID'] = $provinsi->UserID;

                        $this->smartyci->assign('data', $data);
                        $this->smartyci->display('administrator/user_pemerintah/edit_pemerintahprovinsi.tpl');
                        break;
                    }
                case 'delete':
                    $UserID = $this->input->get('user');
                    //echo $UserID;
                    //echo $value;
                    $this->ion_auth->delete_user($UserID);
                    $this->pemerintahmodel->deleteUserPemerintah($value);
                    redirect('administrator/pemerintahprovinsi', 'refresh');
                    break;
                default :
                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/user_pemerintah/pemerintah_provinsi.tpl');
            }
        }
    }

    function pemerintahpusat($action = NULL, $value = NULL) {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            // saat edit ambil data sesuai dengan set value
            $data['PemerintahPusat'] = $this->pemerintahmodel->getUserPemerintah(3);

            $this->form_validation->set_rules('nama', 'Nama Identitas', 'required|xss_clean');
            //$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
            $this->form_validation->set_rules('kode_pemerintah', 'Kode Pemerintahan', 'required|xss_clean');
            $this->form_validation->set_rules('logo', 'Logo', 'callback_image_upload');
            $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
            $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required');

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            switch ($action) {
                case 'insert':
                    if ($this->form_validation->run() == TRUE) {

                        $username = $this->input->post('email');
                        $password = $this->input->post('password');

                        $group = array('3'); // Sets user to admin. No need for array('1', '2') as user is always set to member by default

                        $additional_data = array(
                            'photo' => $this->input->post('logo'),
                                //'pemohon_id' => $this->db->insert_id(),
                        );

                        if ($this->ion_auth->register($username, $password, $username, $additional_data, $group) == true) {
                            $data = array(
                                'Nama' => $this->input->post('nama'),
                                'Email' => $this->input->post('email'),
                                'Logo' => $this->upload->file_name,
                                //'password' => $this->input->post('password'),
                                'KodePemerintah' => $this->input->post('kode_pemerintah'),
                                'Tipe' => 'Pusat',
                                'UserID' => $this->pemerintahmodel->getLastID()
                            );
                            $this->pemerintahmodel->insertPemerintah($data);

                            // notifikasi sudah ada
                            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Sudah tersimpan');
                        }
                        //$this->pemerintahmodel->insert($data);
                        redirect('administrator/pemerintahpusat', 'refresh');
                        //echo "success";
                        //break;
                    } else {
                        $data['nama'] = array(
                            'name' => 'nama',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Nama Identitas',
                            'value' => $this->form_validation->set_value('nama')
                        );

                        $data['email'] = array(
                            'name' => 'email',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik email',
                            'value' => $this->form_validation->set_value('email')
                        );
                        $data['logo'] = array(
                            'name' => 'logo',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Logo',
                            'type' => 'file',
                            'value' => $this->form_validation->set_value('logo')
                        );
                        $data['password'] = array(
                            'name' => 'password',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Passoword',
                            'type' => 'password',
                            'value' => $this->form_validation->set_value('password')
                        );
                        $data['kode_pemerintah'] = array(
                            'option' => $this->comboboxmodel->getPusat_dropdown(),
                            'name' => 'kode_pemerintah',
                            'diseleksi' => $this->form_validation->set_value('id_kategori')
                        );
                        $data['password_confirm'] = array(
                            'name' => 'password_confirm',
                            'class' => 'form-control',
                            'type' => 'password',
                            'placeholder' => 'Konfirmasi Password',
                            'value' => $this->form_validation->set_value('password_confirm'),
                        );

                        $this->smartyci->assign('data', $data);
                        $this->smartyci->display('administrator/user_pemerintah/insert_pemerintahpusat.tpl');
                        break;
                    }
                case 'edit':
                    $this->form_validation->set_rules('password_lama', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']');

                    if ($this->form_validation->run() == true) {
                        $password = $this->input->post('password_lama');
                        $UserID = $this->input->post('UserID');
                        $id = $this->input->post('ID');

                        $data = array(
                            'Nama' => $this->input->post('nama'),
                            'Email' => $this->input->post('email'),
                            'Logo' => $this->upload->file_name,
                            //'password' => $this->input->post('password'),
                            'KodePemerintah' => $this->input->post('kode_pemerintah'),
                            'Tipe' => 'Pusat',
                            'UserID' => $this->input->post('UserID'),
                        );

                        $ionauth = array(
                            'email' => $this->input->post('email'),
                            'password' => $this->input->post('password'),
                        );

                        //if ($this->ion_auth->hash_password_db($UserID, $password) != true) {
                        //$data['message'] = $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
                        //    redirect('administrator/pemerintahkota/edit/' . $id . '');
                        //}
                        // update 
                        $this->pemerintahmodel->updateUserPemerintah($id, $data);
                        $this->ion_auth_model->update($UserID, $ionauth);

                        redirect('administrator/pemerintahpusat', 'refresh');
                        break;
                    } else {
                        if (empty($value)) {
                            redirect('administrator/pemerintahpusat', 'refresh');
                        }
                        // ambil data user pemerintah kota sesuai dengan id
                        $query = $this->pemerintahmodel->getUserPemerintahEdit($value);
                        $pusat = $query->row();
                        // ambil dengan method 

                        $data['nama'] = array(
                            'name' => 'nama',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Nama Identitas',
                            'value' => ($pusat->Nama == "" ? $this->form_validation->set_value('nama') : $pusat->Nama)
                        );

                        $data['email'] = array(
                            'name' => 'email',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik email',
                            'value' => ($pusat->Email == "" ? $this->form_validation->set_value('email') : $pusat->Email)
                        );
                        $data['logo'] = array(
                            'name' => 'logo',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Logo',
                            'type' => 'file',
                            'value' => ($pusat->Logo == "" ? $this->form_validation->set_value('logo') : $pusat->Logo)
                        );
                        $data['password_lama'] = array(
                            'name' => 'password_lama',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Password Lama',
                            'type' => 'text',
                            'value' => $this->form_validation->set_value('password_lama')
                        );
                        $data['password'] = array(
                            'name' => 'password',
                            'class' => 'form-control',
                            'placeholder' => 'Ketik Passoword',
                            'type' => 'password',
                            'value' => $this->form_validation->set_value('password')
                        );
                        $data['kode_pemerintah'] = array(
                            'option' => $this->comboboxmodel->getPusat_dropdown(),
                            'name' => 'kode_pemerintah',
                            'diseleksi' => ($pusat->KodePemerintah == "" ? $this->form_validation->set_value('kode_pemerintah') : $pusat->KodePemerintah)
                        );
                        $data['password_confirm'] = array(
                            'name' => 'password_confirm',
                            'class' => 'form-control',
                            'type' => 'password',
                            'placeholder' => 'Konfirmasi Password',
                            'value' => $this->form_validation->set_value('password_confirm'),
                        );

                        // ngambil id untuk ke alamat form_open
                        $data['id'] = $pusat->ID;
                        $data['UserID'] = $pusat->UserID;

                        $this->smartyci->assign('data', $data);
                        $this->smartyci->display('administrator/user_pemerintah/edit_pemerintahpusat.tpl');
                        break;
                    }
                case 'delete':
                    $UserID = $this->input->get('user');
                    //echo $UserID;
                    //echo $value;
                    $this->ion_auth->delete_user($UserID);
                    $this->pemerintahmodel->deleteUserPemerintah($value);
                    redirect('administrator/pemerintahpusat', 'refresh');
                    break;
                default :
                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/user_pemerintah/pemerintah_pusat.tpl');
            }
        }
    }

    function image_upload() {
        if ($_FILES['logo']['size'] != 0) {
            $upload_dir = './assets/img/';
            /* if (!is_dir($upload_dir)) {
              mkdir($upload_dir);
              } */
            $config['upload_path'] = $upload_dir;
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
            $config['file_name'] = $this->upload->file_name;
            $config['overwrite'] = false;
            $config['max_size'] = '5120';

            $this->upload->initialize($config); // meng set config yang sudah di atur
            if (!$this->upload->do_upload('logo')) {
                $this->form_validation->set_message('image_upload', $this->upload->display_errors());
                return false;
            } else {
                $this->upload_data['file'] = $this->upload->data();
                return true;
            }
        } else {
            $this->form_validation->set_message('image_upload', "No file selected");
            return false;
        }
    }

    function user_masyarakat() {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            $data = array(
                'data_masyarakat' => $this->masyarakatmodel->getUserMasyarakat()
            );

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);
            $this->smartyci->assign('data', $data);
            $this->smartyci->display('administrator/user_masyarakat/masyarakat.tpl');
        }
    }

    function tingkatkota($action = NULL, $value = NULL) {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            // saat edit ambil data sesuai dengan set value
            $data['TingkatKota'] = $this->pemerintahmodel->getTingkatPemerintah(1);

            $this->form_validation->set_rules('nama', 'Nama Identitas', 'required|xss_clean');
            $this->form_validation->set_rules('provinsi_id', 'Provinsi', 'required|xss_clean');

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            switch ($action) {
                case 'insert':
                    if ($this->form_validation->run() == TRUE) {

                        $data = array(
                            'Nama' => $this->input->post('nama'),
                            'ProvinsiID' => $this->input->post('provinsi_id'),
                        );

                        $this->pemerintahmodel->insertTingkatPemerintah(1, $data);

                        // notifikasi sudah ada
                        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Sudah tersimpan');
                        redirect('administrator/tingkatkota', 'refresh');
                    }
                    $data['nama'] = array(
                        'name' => 'nama',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nama Identitas',
                        'value' => $this->form_validation->set_value('nama')
                    );
                    $data['provinsi_id'] = array(
                        'option' => $this->comboboxmodel->getProvinsi_dropdown(),
                        'name' => 'provinsi_id',
                        'diseleksi' => $this->form_validation->set_value('provinsi_id')
                    );

                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/tingkat_pemerintah/tingkat_kota.tpl');
                    break;
                case 'delete':
                    $id['id'] = $value;
                    $this->pemerintahmodel->deleteTingkatPemerintah(1, $id);

                    // notifikasi sudah ada
                    $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Telah Di hapus');
                    redirect('administrator/tingkatkota', 'refresh');
                    break;
                default :
                    $data['nama'] = array(
                        'name' => 'nama',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nama Identitas',
                        'value' => $this->form_validation->set_value('nama')
                    );
                    $data['provinsi_id'] = array(
                        'option' => $this->comboboxmodel->getProvinsi_dropdown(),
                        'name' => 'provinsi_id',
                        'diseleksi' => $this->form_validation->set_value('provinsi_id')
                    );

                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/tingkat_pemerintah/tingkat_kota.tpl');
            }
        }
    }
    
    function tingkatprovinsi($action = NULL, $value = NULL) {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            // saat edit ambil data sesuai dengan set value
            $data['TingkatProvinsi'] = $this->pemerintahmodel->getTingkatPemerintah(2);

            $this->form_validation->set_rules('nama', 'Nama Identitas', 'required|xss_clean');
            //$this->form_validation->set_rules('provinsi_id', 'Provinsi', 'required|xss_clean');

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            switch ($action) {
                case 'insert':
                    if ($this->form_validation->run() == TRUE) {

                        $data = array(
                            'Nama' => $this->input->post('nama'),
                        );

                        $this->pemerintahmodel->insertTingkatPemerintah(2, $data);

                        // notifikasi sudah ada
                        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Sudah tersimpan');
                        redirect('administrator/tingkatprovinsi', 'refresh');
                    }
                    $data['nama'] = array(
                        'name' => 'nama',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nama Identitas',
                        'value' => $this->form_validation->set_value('nama')
                    );

                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/tingkat_pemerintah/tingkat_provinsi.tpl');
                    break;
                case 'delete':
                    $id['id'] = $value;
                    $this->pemerintahmodel->deleteTingkatPemerintah(2, $id);

                    // notifikasi sudah ada
                    $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Telah Di hapus');
                    redirect('administrator/tingkatprovinsi', 'refresh');
                    break;
                default :
                    $data['nama'] = array(
                        'name' => 'nama',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nama Identitas',
                        'value' => $this->form_validation->set_value('nama')
                    );

                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/tingkat_pemerintah/tingkat_provinsi.tpl');
            }
        }
    }
    function tingkatpusat($action = NULL, $value = NULL) {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            // saat edit ambil data sesuai dengan set value
            $data['TingkatPusat'] = $this->pemerintahmodel->getTingkatPemerintah(3);

            $this->form_validation->set_rules('nama', 'Nama Identitas', 'required|xss_clean');
            //$this->form_validation->set_rules('provinsi_id', 'Provinsi', 'required|xss_clean');

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            switch ($action) {
                case 'insert':
                    if ($this->form_validation->run() == TRUE) {

                        $data = array(
                            'Nama' => $this->input->post('nama'),
                        );

                        $this->pemerintahmodel->insertTingkatPemerintah(3, $data);

                        // notifikasi sudah ada
                        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Sudah tersimpan');
                        redirect('administrator/tingkatpusat', 'refresh');
                    }
                    $data['nama'] = array(
                        'name' => 'nama',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nama Identitas',
                        'value' => $this->form_validation->set_value('nama')
                    );

                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/tingkat_pemerintah/tingkat_pusat.tpl');
                    break;
                case 'delete':
                    $id['id'] = $value;
                    $this->pemerintahmodel->deleteTingkatPemerintah(3, $id);

                    // notifikasi sudah ada
                    $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Telah Di hapus');
                    redirect('administrator/tingkatpusat', 'refresh');
                    break;
                default :
                    $data['nama'] = array(
                        'name' => 'nama',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nama Identitas',
                        'value' => $this->form_validation->set_value('nama')
                    );

                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/tingkat_pemerintah/tingkat_pusat.tpl');
            }
        }
    }
    
    function datakeluhan($action = NULL, $value = NULL) {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            // saat edit ambil data sesuai dengan set value
            $data['data_keluhan'] = $this->keluhanmodel->getKeluhanAdmin();

            $this->form_validation->set_rules('nama', 'Nama Identitas', 'required|xss_clean');
            //$this->form_validation->set_rules('provinsi_id', 'Provinsi', 'required|xss_clean');

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            switch ($action) {
                case 'insert':
                    if ($this->form_validation->run() == TRUE) {

                        $data = array(
                            'Nama' => $this->input->post('nama'),
                        );

                        $this->pemerintahmodel->insertTingkatPemerintah(3, $data);

                        // notifikasi sudah ada
                        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Sudah tersimpan');
                        redirect('administrator/tingkatpusat', 'refresh');
                    }
                case 'delete':
                    $id['id'] = $value;
                    $this->pemerintahmodel->deleteTingkatPemerintah(3, $id);

                    // notifikasi sudah ada
                    $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Telah Di hapus');
                    redirect('administrator/tingkatpusat', 'refresh');
                    break;
                default :
                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/data_complaint/data_keluhan.tpl');
            }
        }
    }
    
    function datakategori($action = NULL, $value = NULL) {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            $this->session->set_flashdata('message', "Anda Belum Login");
            redirect('auth/logout', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { //remove this elseif if you want to enable this for non-admins
            //redirect them to the home page because they must be an administrator to view this
            $this->session->set_flashdata('message', "Anda tidak bisa akses halaman ini");
            redirect('auth/logout');
        } else {
            // pemanggilan di header username
            $user = $this->ion_auth->user()->row();
            $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
            $groups = array();
            foreach ($user_groups as $user_group) {
                $groups[$user_group->id] = $user_group->name;
            }

            // saat edit ambil data sesuai dengan set value
            $data['data_kategori'] = $this->kategorimodel->getKategori();

            $this->form_validation->set_rules('nama', 'Nama Identitas', 'required|xss_clean');
            //$this->form_validation->set_rules('provinsi_id', 'Provinsi', 'required|xss_clean');

            $this->smartyci->assign('user', $user);
            $this->smartyci->assign('groups', $groups);

            switch ($action) {
                case 'insert':
                    if ($this->form_validation->run() == TRUE) {

                        $data = array(
                            'Nama' => $this->input->post('nama'),
                        );

                        $this->kategorimodel->insertKategori($data);

                        // notifikasi sudah ada
                        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Sudah tersimpan');
                        redirect('administrator/datakategori', 'refresh');
                    }
                    $data['nama'] = array(
                        'name' => 'nama',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nama Identitas',
                        'value' => $this->form_validation->set_value('nama')
                    );

                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/data_complaint/data_kategori.tpl');
                    break;
                case 'delete':
                    $id['id'] = $value;
                    $this->kategorimodel->deleteKategori($id);

                    // notifikasi sudah ada
                    $data['message'] = (validation_errors()) ? validation_errors() : $this->session->set_flashdata('message', 'Data Telah Di hapus');
                    redirect('administrator/datakategori', 'refresh');
                    break;
                default :
                    $data['nama'] = array(
                        'name' => 'nama',
                        'class' => 'form-control',
                        'placeholder' => 'Ketik Nama Identitas',
                        'value' => $this->form_validation->set_value('nama')
                    );

                    $this->smartyci->assign('data', $data);
                    $this->smartyci->display('administrator/data_complaint/data_kategori.tpl');
            }
        }
    }
}
