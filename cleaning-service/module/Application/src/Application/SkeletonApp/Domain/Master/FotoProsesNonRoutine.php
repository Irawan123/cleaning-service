<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * FotoProsesNonRoutine
 */
class FotoProsesNonRoutine
{
    /**
     * @var string
     */
    private $lokasi;

    /**
     * @var string
     */
    private $alamat;

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
     * @var \Application\SkeletonApp\Domain\Master\Pegawai
     */
    private $pegawai;


    /**
     * Set lokasi
     *
     * @param string $lokasi
     * @return FotoProsesNonRoutine
     */
    public function setLokasi($lokasi)
    {
        $this->lokasi = $lokasi;

        return $this;
    }

    /**
     * Get lokasi
     *
     * @return string 
     */
    public function getLokasi()
    {
        return $this->lokasi;
    }

    /**
     * Set alamat
     *
     * @param string $alamat
     * @return FotoProsesNonRoutine
     */
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;

        return $this;
    }

    /**
     * Get alamat
     *
     * @return string 
     */
    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * Set keterangan
     *
     * @param string $keterangan
     * @return FotoProsesNonRoutine
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
     * @return FotoProsesNonRoutine
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
     * Set pegawai
     *
     * @param \Application\SkeletonApp\Domain\Master\Pegawai $pegawai
     * @return FotoProsesNonRoutine
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
