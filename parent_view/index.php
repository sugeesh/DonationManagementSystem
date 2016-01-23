<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/23/2016
 * Time: 11:42 PM
 */
include_once "../php/model/Prent.php";

include_once "../php/controller/ParntController.php";


use Model\Prent;

use Controllers\ParntController;


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


    if (isset($_POST['register_parent'])) {
        include_once "../php/model/Prent.php";

        include_once "../php/controller/ParntController.php";

        $name = $_POST['name'];
        $nic = $_POST['nic'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone'];
        $username = $_POST['userName'];
        $password = $_POST['password'];

        $parent_me=new Prent($name,$nic,$address,$telephone,$username,$password);
$parentcontroller=new ParntController();
        $parentcontroller->addParent($parent_me);

        include "login.php";
    }
if(isset($_POST['login'])){
    $parentcontroller = new ParntController();

    $password = $_POST['password'];
        $username = $_POST['username'];
    $result = $parentcontroller->checkForLogin($username,$password);
    if($result==1){
        include "parent_home.php";
    }else{
        include "login.php";
    }
}
