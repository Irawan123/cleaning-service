<?php

namespace Application\SkeletonApp\Domain\Master;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pegawai
 */
class Pegawai
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
     * @var string
     */
    private $nomorTelepon;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $foto_sebelum_non_routine;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $foto_sesudah_non_routine;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $foto_proses_non_routine;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $detail_pekerjaan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_sebelum = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_sesudah = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_temuan = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_sebelum_non_routine = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_sesudah_non_routine = new \Doctrine\Common\Collections\ArrayCollection();
        $this->foto_proses_non_routine = new \Doctrine\Common\Collections\ArrayCollection();
        $this->detail_pekerjaan = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Pegawai
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
     * @return Pegawai
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
     * Set nomorTelepon
     *
     * @param string $nomorTelepon
     * @return Pegawai
     */
    public function setNomorTelepon($nomorTelepon)
    {
        $this->nomorTelepon = $nomorTelepon;

        return $this;
    }

    /**
     * Get nomorTelepon
     *
     * @return string 
     */
    public function getNomorTelepon()
    {
        return $this->nomorTelepon;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Pegawai
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * Add user
     *
     * @param \Application\SkeletonApp\Domain\Master\User $user
     * @return Pegawai
     */
    public function addUser(\Application\SkeletonApp\Domain\Master\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Application\SkeletonApp\Domain\Master\User $user
     */
    public function removeUser(\Application\SkeletonApp\Domain\Master\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add foto_sebelum
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoSebelum $fotoSebelum
     * @return Pegawai
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
     * @return Pegawai
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
     * @return Pegawai
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
     * Add foto_sebelum_non_routine
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoSebelumNonRoutine $fotoSebelumNonRoutine
     * @return Pegawai
     */
    public function addFotoSebelumNonRoutine(\Application\SkeletonApp\Domain\Master\FotoSebelumNonRoutine $fotoSebelumNonRoutine)
    {
        $this->foto_sebelum_non_routine[] = $fotoSebelumNonRoutine;

        return $this;
    }

    /**
     * Remove foto_sebelum_non_routine
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoSebelumNonRoutine $fotoSebelumNonRoutine
     */
    public function removeFotoSebelumNonRoutine(\Application\SkeletonApp\Domain\Master\FotoSebelumNonRoutine $fotoSebelumNonRoutine)
    {
        $this->foto_sebelum_non_routine->removeElement($fotoSebelumNonRoutine);
    }

    /**
     * Get foto_sebelum_non_routine
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotoSebelumNonRoutine()
    {
        return $this->foto_sebelum_non_routine;
    }

    /**
     * Add foto_sesudah_non_routine
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoSesudahNonRoutine $fotoSesudahNonRoutine
     * @return Pegawai
     */
    public function addFotoSesudahNonRoutine(\Application\SkeletonApp\Domain\Master\FotoSesudahNonRoutine $fotoSesudahNonRoutine)
    {
        $this->foto_sesudah_non_routine[] = $fotoSesudahNonRoutine;

        return $this;
    }

    /**
     * Remove foto_sesudah_non_routine
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoSesudahNonRoutine $fotoSesudahNonRoutine
     */
    public function removeFotoSesudahNonRoutine(\Application\SkeletonApp\Domain\Master\FotoSesudahNonRoutine $fotoSesudahNonRoutine)
    {
        $this->foto_sesudah_non_routine->removeElement($fotoSesudahNonRoutine);
    }

    /**
     * Get foto_sesudah_non_routine
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotoSesudahNonRoutine()
    {
        return $this->foto_sesudah_non_routine;
    }

    /**
     * Add foto_proses_non_routine
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoProsesNonRoutine $fotoProsesNonRoutine
     * @return Pegawai
     */
    public function addFotoProsesNonRoutine(\Application\SkeletonApp\Domain\Master\FotoProsesNonRoutine $fotoProsesNonRoutine)
    {
        $this->foto_proses_non_routine[] = $fotoProsesNonRoutine;

        return $this;
    }

    /**
     * Remove foto_proses_non_routine
     *
     * @param \Application\SkeletonApp\Domain\Master\FotoProsesNonRoutine $fotoProsesNonRoutine
     */
    public function removeFotoProsesNonRoutine(\Application\SkeletonApp\Domain\Master\FotoProsesNonRoutine $fotoProsesNonRoutine)
    {
        $this->foto_proses_non_routine->removeElement($fotoProsesNonRoutine);
    }

    /**
     * Get foto_proses_non_routine
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotoProsesNonRoutine()
    {
        return $this->foto_proses_non_routine;
    }

    /**
     * Add detail_pekerjaan
     *
     * @param \Application\SkeletonApp\Domain\Master\DetailPekerjaan $detailPekerjaan
     * @return Pegawai
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
