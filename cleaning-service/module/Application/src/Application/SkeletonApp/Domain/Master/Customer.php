<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 */
class Customer
{
    /**
     * @var string
     */
    private $nama;

    /**
     * @var string
     */
    private $perusahaan;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $nomorTelepon;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $zona;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zona = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Customer
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get nama
     *
     * @return string 
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set perusahaan
     *
     * @param string $perusahaan
     * @return Customer
     */
    public function setPerusahaan($perusahaan)
    {
        $this->perusahaan = $perusahaan;

        return $this;
    }

    /**
     * Get perusahaan
     *
     * @return string 
     */
    public function getPerusahaan()
    {
        return $this->perusahaan;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Customer
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set nomorTelepon
     *
     * @param string $nomorTelepon
     * @return Customer
     */
    public function setNomorTelepon($nomorTelepon)
    {
        $this->nomorTelepon = $nomorTelepon;

        return $this;
    }

    /**
     * Get nomorTelepon
     *
     * @return string 
     */
    public function getNomorTelepon()
    {
        return $this->nomorTelepon;
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
     * Add zona
     *
     * @param \Application\SkeletonApp\Domain\Master\Zona $zona
     * @return Customer
     */
    public function addZona(\Application\SkeletonApp\Domain\Master\Zona $zona)
    {
        $this->zona[] = $zona;

        return $this;
    }

    /**
     * Remove zona
     *
     * @param \Application\SkeletonApp\Domain\Master\Zona $zona
     */
    public function removeZona(\Application\SkeletonApp\Domain\Master\Zona $zona)
    {
        $this->zona->removeElement($zona);
    }

    /**
     * Get zona
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Add user
     *
     * @param \Application\SkeletonApp\Domain\Master\User $user
     * @return Customer
     */
    public function addUser(\Application\SkeletonApp\Domain\Master\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Application\SkeletonApp\Domain\Master\User $user
     */
    public function removeUser(\Application\SkeletonApp\Domain\Master\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}
