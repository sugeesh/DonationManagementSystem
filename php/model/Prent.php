<?php
/**
 * Created by PhpStorm.
 * User: Supun
 * Date: 1/24/2016
 * Time: 12:03 AM
 */

namespace Model;
class Prent{

    private $name;
    private $nic;
    private $address;
    private $telephone;
    private $username;
    private $password;

    /**
     * Paren constructor.
     * @param $name
     * @param $nic
     * @param $address
     * @param $telephone
     * @param $username
     * @param $password
     */
    public function __construct($name, $nic, $address, $telephone, $username, $password)
    {
        $this->name = $name;
        $this->nic = $nic;
        $this->address = $address;
        $this->telephone = $telephone;
        $this->username = $username;
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



}