<?php
/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/24/2018
 * Time: 10:59 PM
 */
class Home extends CI_Controller{
    function index(){
        $this->load->view('public/home');
    }
}