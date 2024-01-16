<?php

function check_already_login()
{
    $ci = &get_instance();
    $session = $ci->session->userdata();
    if (isset($session['rf_pilot'])) {
        redirect(base_url('mobile/index'));
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $session = $ci->session->userdata('rf_pilot');
    if (!$session) {
        redirect('auth');
    }
}
