<?php
/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/25/2018
 * Time: 12:55 AM
 */
?>
<div id="sidebar-menu">
    <ul>
        <li><a href='<?=base_url($this->session->userdata('username').'/dashboard');?>'><i class='icon-home-3'></i><span>Dashboard</span>
        </li>
    </ul>
    <ul>
        <li><a href='<?=base_url($this->session->userdata('username').'/electre');?>'><i class='icon-chart-pie-1'></i><span>Electre</span>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
