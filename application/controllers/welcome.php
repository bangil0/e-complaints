<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
    function construct() {
        parent:: construct();
        $this->load->library('ion_auth');
        $this->load->library('session');
        $this->load->library('smartyci');

        $this->load->helper(array('url', 'form'));
    }

    function index() {
        //$this->load->view('welcome_message');
        $data = array(
            'title' => 'Selamat datang di Codigniter dengan smarty Template',
            'body' => 'halaman ini merupakan halaman default dari codeigniter',
            'company' => 'perusahaan abal-abal',
            'team' => array(
                'directors' => 'Kurosaki Ichigo',
                'developer' => array(
                    'Naruto Uzumaki',
                    'Yuyu Hakusho',
                    'Sakura Haruno',
                    'Hatake Kakashi'
                )
            )
        );
        $this->smartyci->assign('data', $data);
        $this->smartyci->display('administrator/index.tpl');
    }

    function registrasi() {
        if ($this->ion_auth->logged_in()) {
            redirect('auth/index');
        }

        $data['title'] = "Halaman Registrasi";

        $this->form_validation->set_rules('username', 'Username', 'required|xss clean|min length[4]');

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');

        $this->form_validation->set_rules('first_name', 'Nama Depan', 'required|xss_clean');

        $this->form_validation->set_rules('phone', 'Nomor Telepon', 'required|numeric|xss clean|min length[7]|max length[12]');

        $this->form_validation->set_rules('company', 'Perusahaan', 'required|xss_clean');

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');

        $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required');

        if ($this->form_validation->run() == true) {
            $username = $this->input->post('username', true);
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone')
            );
        }

        if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data)) {
            $this->session->set_flashdata('message', "Akun telah dibuat. Silakan cek email untuk aktivasi.");
            redirect('auth/login');

            //apabila akun langsung aktif tanpa perlu aktivasi via notifikasi email:
            //$this->session->set_flashdata('message', "Akun telah dibuat. Silakan login.");
            //redirect('auth/login'); 
        } else {
            $main['message'] = (validation_errors()) ? validation_errors() : $this->ion_auth->errors();

            $main['username'] = array(
                'name' => 'username',
                'id' => 'username',
                'type' => 'text',
                'value' => $this->form_validation->set_value('username')
            );
            $main['email'] = array(
                'name' => 'email',
                'id' => 'email',
                'type' => 'text',
                'value' => $this->form_validation->set_value('email'),
            );
            $main['first_name'] = array(
                'name' => 'first_name',
                'id' => 'first_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('first_name'),
            );
            $main['last_name'] = array(
                'name' => 'last_name',
                'id' => 'last_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('last_name'),
            );
            $main['company'] = array(
                'name' => 'company',
                'id' => 'company',
                'type' => 'text',
                'value' => $this->form_validation->set_value('company'),
            );
            $main['phone'] = array(
                'name' => 'phone',
                'id' => 'phone',
                'type' => 'text',
                'value' => $this->form_validation->set_value('phone'),
            );
            $main['password'] = array(
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'value' => $this->form_validation->set_value('password'),
            );
            $main['password_confirm'] = array(
                'name' => 'password_confirm',
                'id' => 'password_confirm',
                'type' => 'password',
                'value' => $this->form_validation > set_value('password_confirm'),
            );

            $data['content'] = $this->load->view('register_v', $main, true);
            $this->load->view('template', $data);
        }
    }

    function aktivasi($id, $code = false) {
        if ($code !== false) {
            $activation = $this->ion_auth->activate($id, $code);
        }

        if ($activation) {
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('atuh/login');
        } else {
            $this->session->set_flashdata('message', $this->ion_atuh->errors());
            redirect('auth/forgot_password');
        }
    }
    
    function md5(){
        $this->load->model('crud_model');
        
        $password = $this->crud_model->md5();
        
    }

}
