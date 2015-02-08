<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * FotoDetail
 */
class FotoDetail
{
    /**
     * @var string
     */
    private $keterangan;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\SkeletonApp\Domain\Master\Lokasi
     */
    private $lokasi;

    /**
     * @var \Application\SkeletonApp\Domain\Master\ListFotoDetail
     */
    private $list_foto_detail;


    /**
     * Set keterangan
     *
     * @param string $keterangan
     * @return FotoDetail
     */
    public function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    /**
     * Get keterangan
     *
     * @return string 
     */
    public function getKeterangan()
    {
        return $this->keterangan;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return FotoDetail
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
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
     * @return FotoDetail
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

    /**
     * Set list_foto_detail
     *
     * @param \Application\SkeletonApp\Domain\Master\ListFotoDetail $listFotoDetail
     * @return FotoDetail
     */
    public function setListFotoDetail(\Application\SkeletonApp\Domain\Master\ListFotoDetail $listFotoDetail = null)
    {
        $this->list_foto_detail = $listFotoDetail;

        return $this;
    }

    /**
     * Get list_foto_detail
     *
     * @return \Application\SkeletonApp\Domain\Master\ListFotoDetail 
     */
    public function getListFotoDetail()
    {
        return $this->list_foto_detail;
    }
}
