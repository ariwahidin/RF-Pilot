<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobile extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('manifes_m');
        check_not_login();
    }

    public function index()
    {
        $data = array();
        $this->template->load('mobile', 'mobile/dashboard', $data);
    }

    public function inbound_rf(){
        $data = array();
        $this->template->load('mobile', 'mobile/inbound_rf', $data);
    }
}
