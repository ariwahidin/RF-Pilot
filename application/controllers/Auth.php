<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_m');
    }

    public function index($params = null)
    {
        check_already_login();
        if ($params != null) {
            $data = array(
                'messages' => $params
            );
            $this->load->view('auth', $data);
        } else {
            $this->load->view('auth/auth');
        }
    }

    public function proses()
    {
        $post = $_POST;
        $user = $this->auth_m->proses($post);
        $session = array();
        $response = array();
        if ($user->num_rows() > 0) {
            $session['rf_pilot'] = array(
                'username' => $user->row()->username
            );
            $this->session->set_userdata($session);
            $response = array(
                'success' => true
            );
        } else {
            $response = array(
                'success' => false
            );
        }
        echo json_encode($response);
    }

    public function auth()
    {
        $session = $this->session->userdata();
        if (isset($session['rf_pilot'])) {
            redirect(base_url('mobile/index'));
        }
        var_dump($session);
    }

    public function logout()
    {
        $params = array('rf_pilot');
        $this->session->unset_userdata($params);
        redirect(base_url('auth'));
    }
}
