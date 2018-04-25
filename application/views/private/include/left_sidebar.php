<?php
/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/25/2018
 * Time: 12:51 AM
 */
?>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="profile.html" class="rounded-image profile-image"><img
                        src="<?= base_url('assets/private/'); ?>img/users/user-100.jpg"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">Welcome <b><?=$this->session->userdata('username');?></b></div>
                <div class="profile-buttons">
                    <a href="javascript:;" title="Log Out"><i class="fa fa-power-off text-red-1"></i></a>
                </div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider"/>
        <div class="clearfix"></div>
        <!--- Divider -->
        <?php include_once 'sidebar_menu.php'; ?>
        <div class="clearfix"></div>
    </div>
</div>