<?php

namespace LeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presence
 *
 * @ORM\Table(name="presence")
 * @ORM\Entity(repositoryClass="LeoBundle\Repository\PresenceRepository")
 */
class Presence
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
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity="LeoBundle\Entity\Reunion")
     * @ORM\JoinColumn(name="idReunion", referencedColumnName="id")
     */
    private $idReunion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idEdition", type="integer", nullable=true)
     */
    private $idEdition;

    /**
     * @var int
     *
     * @ORM\Column(name="presence", type="integer", nullable=false)
     */
    private $presence;


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
     * Set idUser.
     *
     * @param int $idUser
     *
     * @return Presence
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

    /**
     * Set idReunion.
     *
     * @param int|null $idReunion
     *
     * @return Presence
     */
    public function setIdReunion($idReunion = null)
    {
        $this->idReunion = $idReunion;

        return $this;
    }

    /**
     * Get idReunion.
     *
     * @return int|null
     */
    public function getIdReunion()
    {
        return $this->idReunion;
    }

    /**
     * Set idEdition.
     *
     * @param int|null $idEdition
     *
     * @return Presence
     */
    public function setIdEdition($idEdition = null)
    {
        $this->idEdition = $idEdition;

        return $this;
    }

    /**
     * Get idEdition.
     *
     * @return int|null
     */
    public function getIdEdition()
    {
        return $this->idEdition;
    }

    /**
     * Set presence.
     *
     * @param string $presence
     *
     * @return Presence
     */
    public function setPresence($presence)
    {
        $this->presence = $presence;

        return $this;
    }

    /**
     * Get presence.
     *
     * @return string
     */
    public function getPresence()
    {
        return $this->presence;
    }
}
