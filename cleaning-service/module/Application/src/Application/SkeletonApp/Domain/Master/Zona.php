<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zona
 */
class Zona
{
    /**
     * @var string
     */
    private $nama;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lokasi;

    /**
     * @var \Application\SkeletonApp\Domain\Master\Customer
     */
    private $customer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lokasi = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Zona
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add lokasi
     *
     * @param \Application\SkeletonApp\Domain\Master\Lokasi $lokasi
     * @return Zona
     */
    public function addLokasi(\Application\SkeletonApp\Domain\Master\Lokasi $lokasi)
    {
        $this->lokasi[] = $lokasi;

        return $this;
    }

    /**
     * Remove lokasi
     *
     * @param \Application\SkeletonApp\Domain\Master\Lokasi $lokasi
     */
    public function removeLokasi(\Application\SkeletonApp\Domain\Master\Lokasi $lokasi)
    {
        $this->lokasi->removeElement($lokasi);
    }

    /**
     * Get lokasi
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLokasi()
    {
        return $this->lokasi;
    }

    /**
     * Set customer
     *
     * @param \Application\SkeletonApp\Domain\Master\Customer $customer
     * @return Zona
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
}
