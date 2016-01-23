<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/12/2016
 * Time: 10:55 PM
 */
namespace Controllers;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/donationmanagementsystem/php/model/Prent.php";
include_once($path);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/donationmanagementsystem/php/Connection.php";
include_once($path);

use Model\Connection;
use Model\Prent;


class ParntController{
function addParent(Prent $prent)
{


    $connectionObject = Connection::getInstance();
    $connection = $connectionObject->get_connection();
    $applicant_id=NULL;
    $name = $prent->getName();
    $nic = $prent->getNic();
    $adress = $prent->getAddress();
    $telephone = $prent->getTelephone();
    $username = $prent->getUsername();
    $password = $prent->getPassword();
    $stmt = $connection->prepare("INSERT INTO parent(id,name,NIC,address,telephone,user_name,password) VALUES(?,?,?,?,?,?,?)");
    $stmt->bind_param("issssss",$applicant_id ,$name, $nic, $adress, $telephone, $username, $password);
    $result = $stmt->execute();
    $stmt->close();


    return $result;
}

    function checkForLogin($username,$password){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $connectionObject = Connection::getInstance();
        $connection = $connectionObject->get_connection();

        $sql = mysqli_query($connection, "SELECT id FROM parent WHERE user_name='$username' AND password='$password' LIMIT 1");

        $existCount = mysqli_num_rows($sql);
        if ($existCount == 1) {
            return 1;
        }
        return 0;
    }
}
