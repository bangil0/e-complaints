<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Testing
 *
 * @author Ihsan
 */
class Testing extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->model('keluhanmodel');
    }

    function login() {
        $data['title'] = "Masuk Sistem Informasi E-Complaints ";

        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        }
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            $remember = (bool) $this->input->post('remember');
            if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password'), $remember)) {
                if ($this->ion_auth->in_group(1)) {
                    redirect('administrator', 'refresh');
                } else if ($this->ion_auth->in_group(4)) {
                    redirect('masyarakat', 'refresh');
                } else {
                    redirect('pemerintah', 'refresh');
                }
            } else {
                $data['message'] = $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('auth/login', 'refresh');
            }
        } else {
            $data['message'] = $this->session->flashdata('message');
            $data['username'] = array('name' => 'username',
                'class' => 'form-control',
                'placeholder' => 'Username',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $data['password'] = array('name' => 'password',
                'class' => 'form-control',
                'type' => 'password',
                'placeholder' => 'Kata Sandi',
            );
            $this->smartyci->assign('data', $data);
            $this->smartyci->display('layout/login_v2.tpl');
        }
    }

    function member_registration() {
        $data['title'] = "Daftar Anggota Baru";

        if ($this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        }

        $tables = $this->config->item('tables', 'ion_auth');
        //validate form input
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required');

        if ($this->form_validation->run() == true) {
            $username = $this->input->post('email');
            $password = $this->input->post('password');

            if ($this->input->post('sex') == "M") {
                $photo = "avatar_male.png";
            } else if ($this->input->post('sex') == "F") {
                $photo = "avatar_female.png";
            }

            $group = array('4'); // Sets user to admin. No need for array('1', '2') as user is always set to member by default

            $additional_data = array(
                'photo' => $photo,
                    //'pemohon_id' => $this->db->insert_id(),
            );
        }

        if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $username, $additional_data, $group)) {
            // insert ke pemohon
            //$this->db->insert('pemohon', array(
            //   'username' => $this->input->post('email'),
            //    'jenis_kelamin' => $this->input->post('sex'),
            //   'foto' => $photo));

            $remember = (bool) $this->input->post('remember');
            $this->ion_auth->login($this->input->post('username'), $this->input->post('password'), $remember);

            $main['message'] = $this->session->set_flashdata('message', "Akun telah dibuat. Silakan cek email untuk aktivasi.");
            redirect("auth/login", 'refresh');
        } else {
            $data['message'] = $this->ion_auth->errors();

            $data['email'] = array(
                'name' => 'email',
                'class' => 'form-control',
                'placeholder' => 'Alamat Email',
                'type' => 'text',
                    //'value'=> $this->form_validation->set_value('email'),
            );
            $data['password'] = array(
                'name' => 'password',
                'class' => 'form-control',
                'type' => 'password',
                'placeholder' => 'Password',
                    //'value' => $this->form_validation->set_value('password'),
            );
            $data['password_confirm'] = array(
                'name' => 'password_confirm',
                'class' => 'form-control',
                'type' => 'password',
                'placeholder' => 'Konfirmasi Password',
                    //'value' => $this->form_validation->set_value('password_confirm'),
            );

            $this->smartyci->assign('data', $data);
            $this->smartyci->display('layout/registrasi2.tpl');
        }
    }

    function beranda() {
        if (!$this->ion_auth->logged_in()) {
            //redirect('/', 'refresh');
            $status = false;
            $this->smartyci->assign('status', $status);
        } else {
            $status = true;
            $this->smartyci->assign('status', $status);
        }
        //$this->smartyci->assign('data',$data);
        // pemanggilan di header username
        $user = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
        $groups = array();
        foreach ($user_groups as $user_group) {
            $groups[$user_group->id] = $user_group->name;
        }

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('groups', $groups);
        $this->smartyci->display('administrator/contoh_beranda.tpl');
    }

    function keluhan() {
        $hasil = array(
            'data_keluhan' => $this->keluhanmodel->getKeluhanAdmin()
        );

        $this->smartyci->assign('data', $hasil);
        $this->smartyci->display('testing/array.tpl');
//        foreach ($hasil as $row) {
//            echo $row['Nama'];
//            echo " ";
//            echo $row['IsiKeluhan'];
//            echo " ";
//            echo $row['Tanggal'];
//            echo " ";
//            echo $row['StatusKeluhan'];
//            echo " ";
//             echo $row['KodeTingkatan'];
//            echo " ";
//             echo $row['Tipe'];
//            echo " ";
//             echo $row['UserID'];
//            echo " ";
//             echo $row['KategoriID'];
//            echo "<br>";
//            
//        }
    }

}
