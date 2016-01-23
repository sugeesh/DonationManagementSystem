<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 1/6/2016
 * Time: 9:49 AM
 */
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">

            </div>
            <div class="pull-left info">

            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="./school_main.php">
                    <i class="fa fa-home"></i> <span>Home Page</span>
                </a>
            </li>
            <li class="treeview">
                <a href="./approved_applications.php">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Approved Applications</span>

                </a>
            </li>

            <li class="treeview">
                <a href="./rejected_applications.php">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Rejected Applications</span>

                </a>
            </li>

            <li class="treeview">
                <a href="./remove_parent.php">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Remove Parent</span>
                </a>
            </li>


    </section>
    <!-- /.sidebar -->
</aside>