<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * FotoSesudah
 */
class FotoSesudah
{
    /**
     * @var \DateTime
     */
    private $tanggal;

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
     * Set tanggal
     *
     * @param \DateTime $tanggal
     * @return FotoSesudah
     */
    public function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;

        return $this;
    }

    /**
     * Get tanggal
     *
     * @return \DateTime 
     */
    public function getTanggal()
    {
        return $this->tanggal;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return FotoSesudah
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
     * @return FotoSesudah
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
     * @return FotoSesudah
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
