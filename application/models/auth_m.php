<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    public function proses($post = null)
    {
        $params =  array(
            'username' => $post['username'],
            'password' => $post['password']
        );

        // var_dump($post);

        // var_dump($params);
        // die;
        $query = $query = $this->db->get_where('master_user', $params);
        return $query;
    }
}
