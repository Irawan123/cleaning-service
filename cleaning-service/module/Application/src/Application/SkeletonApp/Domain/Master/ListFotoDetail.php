<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListFotoDetail
 */
class ListFotoDetail
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
    private $foto_detail;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->foto_detail = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return ListFotoDetail
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
     * Add foto_detail
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoDetail $fotoDetail
     * @return ListFotoDetail
     */
    public function addFotoDetail(\Application\SkeletonApp\Domain\Master\FotoDetail $fotoDetail)
    {
        $this->foto_detail[] = $fotoDetail;

        return $this;
    }

    /**
     * Remove foto_detail
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoDetail $fotoDetail
     */
    public function removeFotoDetail(\Application\SkeletonApp\Domain\Master\FotoDetail $fotoDetail)
    {
        $this->foto_detail->removeElement($fotoDetail);
    }

    /**
     * Get foto_detail
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotoDetail()
    {
        return $this->foto_detail;
    }
}
