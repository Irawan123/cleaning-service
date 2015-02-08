<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\SkeletonApp\Domain\Master\Customer
     */
    private $customer;

    /**
     * @var \Application\SkeletonApp\Domain\Master\Pegawai
     */
    private $pegawai;


    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set customer
     *
     * @param \Application\SkeletonApp\Domain\Master\Customer $customer
     * @return User
     */
    public function setCustomer(\Application\SkeletonApp\Domain\Master\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Application\SkeletonApp\Domain\Master\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set pegawai
     *
     * @param \Application\SkeletonApp\Domain\Master\Pegawai $pegawai
     * @return User
     */
    public function setPegawai(\Application\SkeletonApp\Domain\Master\Pegawai $pegawai = null)
    {
        $this->pegawai = $pegawai;

        return $this;
    }

    /**
     * Get pegawai
     *
     * @return \Application\SkeletonApp\Domain\Master\Pegawai 
     */
    public function getPegawai()
    {
        return $this->pegawai;
    }
}
