<?php

/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/25/2018
 * Time: 12:25 AM
 */
class Dashboard extends CI_Controller
{
    function index(){
        $this->load->view('private/dashboard');
    }
}