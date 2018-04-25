<?php

/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/25/2018
 * Time: 12:03 AM
 */
class About extends CI_Controller
{
    function index(){
        $this->load->view('public/about');
    }
}