<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListTemuan
 */
class ListTemuan
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
    private $foto_temuan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->foto_temuan = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return ListTemuan
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
     * Add foto_temuan
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoTemuan $fotoTemuan
     * @return ListTemuan
     */
    public function addFotoTemuan(\Application\SkeletonApp\Domain\Master\FotoTemuan $fotoTemuan)
    {
        $this->foto_temuan[] = $fotoTemuan;

        return $this;
    }

    /**
     * Remove foto_temuan
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoTemuan $fotoTemuan
     */
    public function removeFotoTemuan(\Application\SkeletonApp\Domain\Master\FotoTemuan $fotoTemuan)
    {
        $this->foto_temuan->removeElement($fotoTemuan);
    }

    /**
     * Get foto_temuan
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotoTemuan()
    {
        return $this->foto_temuan;
    }
}
