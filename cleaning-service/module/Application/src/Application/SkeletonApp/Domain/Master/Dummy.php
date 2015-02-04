<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dummy
 */
class Dummy
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
     * Set nama
     *
     * @param string $nama
     * @return Dummy
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
     * @return Dummy
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
     * @return Dummy
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
}
