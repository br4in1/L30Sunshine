<?php

namespace LeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reunion
 *
 * @ORM\Table(name="reunion")
 * @ORM\Entity(repositoryClass="LeoBundle\Repository\ReunionRepository")
 */
class Reunion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="ordreDuJour", type="string", length=255)
     */
    private $ordreDuJour;

    /**
     * @var string
     *
     * @ORM\Column(name="pv", type="string", length=255)
     */
    private $pv;

    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer")
     */
    private $idUser;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Reunion
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return Reunion
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set lieu.
     *
     * @param string $lieu
     *
     * @return Reunion
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu.
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set ordreDuJour.
     *
     * @param string $ordreDuJour
     *
     * @return Reunion
     */
    public function setOrdreDuJour($ordreDuJour)
    {
        $this->ordreDuJour = $ordreDuJour;

        return $this;
    }

    /**
     * Get ordreDuJour.
     *
     * @return string
     */
    public function getOrdreDuJour()
    {
        return $this->ordreDuJour;
    }

    /**
     * Set pv.
     *
     * @param string $pv
     *
     * @return Reunion
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get pv.
     *
     * @return string
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set idUser.
     *
     * @param int $idUser
     *
     * @return Reunion
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser.
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
