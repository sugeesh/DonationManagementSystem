<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/24/2016
 * Time: 1:18 AM
 */

namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/donationmanagementsystem/php/model/Donor.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/donationmanagementsystem/php/Connection.php";
include_once($path);

use Model\Connection;
use Model\Donor;

class DonorController{

    function addDonor(Donor $donor){
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();
        $donor_id=NULL;
        $username=$donor->getUsername();
        $password=$donor->getPassword();
        $name=$donor->getName();
        $address=$donor->getAddress();
        $telephone=$donor->getTelephone();
        $nic=$donor->getNic();

        $stmt = $connection->prepare("INSERT INTO donor(id,username,password,name,address,telephone,NIC) VALUES(?,?,?,?,?,?,?)");
        $stmt->bind_param("issssss",$donor_id ,$username, $password, $name, $address, $telephone, $nic);
        $result = $stmt->execute();
        $stmt->close();


        return $result;
    }
}