<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailPekerjaan
 */
class DetailPekerjaan
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\SkeletonApp\Domain\Master\Pegawai
     */
    private $pegawai;

    /**
     * @var \Application\SkeletonApp\Domain\Master\Pekerjaan
     */
    private $pekerjaan;


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
     * @return DetailPekerjaan
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
     * Set pekerjaan
     *
     * @param \Application\SkeletonApp\Domain\Master\Pekerjaan $pekerjaan
     * @return DetailPekerjaan
     */
    public function setPekerjaan(\Application\SkeletonApp\Domain\Master\Pekerjaan $pekerjaan = null)
    {
        $this->pekerjaan = $pekerjaan;

        return $this;
    }

    /**
     * Get pekerjaan
     *
     * @return \Application\SkeletonApp\Domain\Master\Pekerjaan 
     */
    public function getPekerjaan()
    {
        return $this->pekerjaan;
    }
}
