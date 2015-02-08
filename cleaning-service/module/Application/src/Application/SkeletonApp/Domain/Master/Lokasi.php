<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lokasi
 */
class Lokasi
{
    /**
     * @var string
     */
    private $nama;

    /**
     * @var string
     */
    private $alamat;

    /**
     * @var integer
     */
    private $jumlahAtm;

    /**
     * @var string
     */
    private $keterangan;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $atm;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $foto_detail;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $foto_sebelum;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $foto_sesudah;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $foto_temuan;

    /**
     * @var \Application\SkeletonApp\Domain\Master\Zona
     */
    private $zona;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->atm = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_detail = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_sebelum = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_sesudah = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_temuan = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Lokasi
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
     * Set alamat
     *
     * @param string $alamat
     * @return Lokasi
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
     * Set jumlahAtm
     *
     * @param integer $jumlahAtm
     * @return Lokasi
     */
    public function setJumlahAtm($jumlahAtm)
    {
        $this->jumlahAtm = $jumlahAtm;

        return $this;
    }

    /**
     * Get jumlahAtm
     *
     * @return integer 
     */
    public function getJumlahAtm()
    {
        return $this->jumlahAtm;
    }

    /**
     * Set keterangan
     *
     * @param string $keterangan
     * @return Lokasi
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add atm
     *
     * @param \Application\SkeletonApp\Domain\Master\Atm $atm
     * @return Lokasi
     */
    public function addAtm(\Application\SkeletonApp\Domain\Master\Atm $atm)
    {
        $this->atm[] = $atm;

        return $this;
    }

    /**
     * Remove atm
     *
     * @param \Application\SkeletonApp\Domain\Master\Atm $atm
     */
    public function removeAtm(\Application\SkeletonApp\Domain\Master\Atm $atm)
    {
        $this->atm->removeElement($atm);
    }

    /**
     * Get atm
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAtm()
    {
        return $this->atm;
    }

    /**
     * Add foto_detail
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoDetail $fotoDetail
     * @return Lokasi
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

    /**
     * Add foto_sebelum
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoSebelum $fotoSebelum
     * @return Lokasi
     */
    public function addFotoSebelum(\Application\SkeletonApp\Domain\Master\FotoSebelum $fotoSebelum)
    {
        $this->foto_sebelum[] = $fotoSebelum;

        return $this;
    }

    /**
     * Remove foto_sebelum
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoSebelum $fotoSebelum
     */
    public function removeFotoSebelum(\Application\SkeletonApp\Domain\Master\FotoSebelum $fotoSebelum)
    {
        $this->foto_sebelum->removeElement($fotoSebelum);
    }

    /**
     * Get foto_sebelum
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotoSebelum()
    {
        return $this->foto_sebelum;
    }

    /**
     * Add foto_sesudah
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoSesudah $fotoSesudah
     * @return Lokasi
     */
    public function addFotoSesudah(\Application\SkeletonApp\Domain\Master\FotoSesudah $fotoSesudah)
    {
        $this->foto_sesudah[] = $fotoSesudah;

        return $this;
    }

    /**
     * Remove foto_sesudah
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoSesudah $fotoSesudah
     */
    public function removeFotoSesudah(\Application\SkeletonApp\Domain\Master\FotoSesudah $fotoSesudah)
    {
        $this->foto_sesudah->removeElement($fotoSesudah);
    }

    /**
     * Get foto_sesudah
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotoSesudah()
    {
        return $this->foto_sesudah;
    }

    /**
     * Add foto_temuan
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoTemuan $fotoTemuan
     * @return Lokasi
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

    /**
     * Set zona
     *
     * @param \Application\SkeletonApp\Domain\Master\Zona $zona
     * @return Lokasi
     */
    public function setZona(\Application\SkeletonApp\Domain\Master\Zona $zona = null)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return \Application\SkeletonApp\Domain\Master\Zona 
     */
    public function getZona()
    {
        return $this->zona;
    }
}
