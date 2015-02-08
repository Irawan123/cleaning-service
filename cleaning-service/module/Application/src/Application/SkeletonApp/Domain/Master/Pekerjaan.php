<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pekerjaan
 */
class Pekerjaan
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
    private $detail_pekerjaan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detail_pekerjaan = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Pekerjaan
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
     * Add detail_pekerjaan
     *
     * @param \Application\SkeletonApp\Domain\Master\DetailPekerjaan $detailPekerjaan
     * @return Pekerjaan
     */
    public function addDetailPekerjaan(\Application\SkeletonApp\Domain\Master\DetailPekerjaan $detailPekerjaan)
    {
        $this->detail_pekerjaan[] = $detailPekerjaan;

        return $this;
    }

    /**
     * Remove detail_pekerjaan
     *
     * @param \Application\SkeletonApp\Domain\Master\DetailPekerjaan $detailPekerjaan
     */
    public function removeDetailPekerjaan(\Application\SkeletonApp\Domain\Master\DetailPekerjaan $detailPekerjaan)
    {
        $this->detail_pekerjaan->removeElement($detailPekerjaan);
    }

    /**
     * Get detail_pekerjaan
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetailPekerjaan()
    {
        return $this->detail_pekerjaan;
    }
}
