<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/23/2016
 * Time: 11:42 PM
 */
include_once "../php/model/Donor.php";

include_once "../php/controller/DonorController.php";


use Model\Donor;

use Controllers\DonorController;


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (isset($_POST['register_donor'])) {


    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $donor_me=new Donor($username,$password,$name,$address,$telephone,$nic);
    $donorcontroller=new DonorController();
    $donorcontroller->addDonor($donor_me);

    include "login.php";
}