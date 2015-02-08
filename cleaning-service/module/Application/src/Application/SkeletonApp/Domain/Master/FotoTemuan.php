<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * FotoTemuan
 */
class FotoTemuan
{
    /**
     * @var string
     */
    private $nama;

    /**
     * @var string
     */
    private $jabatan;

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
     * @var \Application\SkeletonApp\Domain\Master\Pegawai
     */
    private $pegawai;

    /**
     * @var \Application\SkeletonApp\Domain\Master\ListTemuan
     */
    private $list_temuan;


    /**
     * Set nama
     *
     * @param string $nama
     * @return FotoTemuan
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
     * Set jabatan
     *
     * @param string $jabatan
     * @return FotoTemuan
     */
    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;

        return $this;
    }

    /**
     * Get jabatan
     *
     * @return string 
     */
    public function getJabatan()
    {
        return $this->jabatan;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return FotoTemuan
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
     * @return FotoTemuan
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
     * Set pegawai
     *
     * @param \Application\SkeletonApp\Domain\Master\Pegawai $pegawai
     * @return FotoTemuan
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

    /**
     * Set list_temuan
     *
     * @param \Application\SkeletonApp\Domain\Master\ListTemuan $listTemuan
     * @return FotoTemuan
     */
    public function setListTemuan(\Application\SkeletonApp\Domain\Master\ListTemuan $listTemuan = null)
    {
        $this->list_temuan = $listTemuan;

        return $this;
    }

    /**
     * Get list_temuan
     *
     * @return \Application\SkeletonApp\Domain\Master\ListTemuan 
     */
    public function getListTemuan()
    {
        return $this->list_temuan;
    }
}
