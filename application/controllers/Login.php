<?php
/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/24/2018
 * Time: 11:42 PM
 */

class Login extends CI_Controller{
    function index(){
        $this->load->view('public/login');
    }

    function do_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($username == 'admin' || $username == 'guest'){
            if($password == 123){
                $this->session->set_userdata('username', $username);
                if($username == 'admin'){
                    redirect('admin/dashboard');
                } else {
                    redirect('guest/dashboard');
                }
            }
        } else {
            $this->load->view('public/login');
        }
    }

}