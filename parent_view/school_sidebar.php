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
                <a href="./parent_home.php">
                    <i class="fa fa-home"></i> <span>Home Page</span>
                </a>
            </li>
            <li class="treeview">
                <a href="register_child.php">
                    <i class="fa fa-user-plus"></i>
                    <span>Register Child</span>

                </a>
            </li>

            <li class="treeview">
                <a href="./register_application.php">
                    <i class="fa fa-user-plus"></i>
                    <span>Add Application</span>

                </a>
            </li>

            <li class="treeview">
                <a href="view_applications.php">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Check Application</span>

                </a>
            </li>


    </section>
    <!-- /.sidebar -->
</aside>