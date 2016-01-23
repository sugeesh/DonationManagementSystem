<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/24/2016
 * Time: 1:15 AM
 */
namespace Model;
class Donor{


    private $username;
    private $password;
    private $name;
    private $address;
    private $telephone;
    private $nic;

    /**
     * Donor constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     * @param $address
     * @param $telephone
     * @param $nic
     */
    public function __construct( $username, $password, $name, $address, $telephone, $nic)
    {

        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->address = $address;
        $this->telephone = $telephone;
        $this->nic = $nic;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * @param mixed $nic
     */
    public function setNic($nic)
    {
        $this->nic = $nic;
    }


}