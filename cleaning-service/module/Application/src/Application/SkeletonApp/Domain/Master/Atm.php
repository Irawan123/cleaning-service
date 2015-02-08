<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atm
 */
class Atm
{
    /**
     * @var string
     */
    private $idAtm;

    /**
     * @var string
     */
    private $jenisAtm;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\SkeletonApp\Domain\Master\Lokasi
     */
    private $lokasi;


    /**
     * Set idAtm
     *
     * @param string $idAtm
     * @return Atm
     */
    public function setIdAtm($idAtm)
    {
        $this->idAtm = $idAtm;

        return $this;
    }

    /**
     * Get idAtm
     *
     * @return string 
     */
    public function getIdAtm()
    {
        return $this->idAtm;
    }

    /**
     * Set jenisAtm
     *
     * @param string $jenisAtm
     * @return Atm
     */
    public function setJenisAtm($jenisAtm)
    {
        $this->jenisAtm = $jenisAtm;

        return $this;
    }

    /**
     * Get jenisAtm
     *
     * @return string 
     */
    public function getJenisAtm()
    {
        return $this->jenisAtm;
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
     * Set lokasi
     *
     * @param \Application\SkeletonApp\Domain\Master\Lokasi $lokasi
     * @return Atm
     */
    public function setLokasi(\Application\SkeletonApp\Domain\Master\Lokasi $lokasi = null)
    {
        $this->lokasi = $lokasi;

        return $this;
    }

    /**
     * Get lokasi
     *
     * @return \Application\SkeletonApp\Domain\Master\Lokasi 
     */
    public function getLokasi()
    {
        return $this->lokasi;
    }
}
