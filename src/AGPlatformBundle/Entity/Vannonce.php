<?php

namespace AGPlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vannonce
 *
 * @ORM\Table(name="vannonce")
 * @ORM\Entity(repositoryClass="AGPlatformBundle\Repository\VannonceRepository")
 */
class Vannonce
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
     * @ORM\Column(name="datei", type="datetime")
     */
    private $datei;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datef", type="datetime", nullable=true)
     */
    private $datef;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable = true)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="prixf", type="integer", nullable= true)
     */
    private $prixf;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable = true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255)
     */
    private $rue;

    /**
     * @var int
     *
     * @ORM\Column(name="surface", type="integer")
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;
    /**
     * @var boolean
     *
     * @ORM\Column(name="vendu", type="boolean" , nullable = true)
     */
    private $vendu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="loue", type="boolean" , nullable = true)
     */
    private $loue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="test", type="boolean" , nullable = true)
     */
    private $test;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datei
     *
     * @param \DateTime $datei
     *
     * @return Vannonce
     */
    public function setDatei($datei)
    {
        $this->datei = $datei;

        return $this;
    }

    /**
     * Get datei
     *
     * @return \DateTime
     */
    public function getDatei()
    {
        return $this->datei;
    }

    /**
     * Set datef
     *
     * @param \DateTime $datef
     *
     * @return Vannonce
     */
    public function setDatef($datef)
    {
        $this->datef = $datef;

        return $this;
    }

    /**
     * Get datef
     *
     * @return \DateTime
     */
    public function getDatef()
    {
        return $this->datef;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Vannonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set prixf
     *
     * @param integer $prixf
     *
     * @return Vannonce
     */
    public function setPrixf($prixf)
    {
        $this->prixf = $prixf;

        return $this;
    }

    /**
     * Get prixf
     *
     * @return int
     */
    public function getPrixf()
    {
        return $this->prixf;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Vannonce
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return Vannonce
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set surface
     *
     * @param integer $surface
     *
     * @return Vannonce
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return int
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Vannonce
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set vendu
     *
     * @param boolean $vendu
     *
     * @return Vannonce
     */
    public function setVendu($vendu)
    {
        $this->vendu = $vendu;


        return $this;
    }

    /**
     * Get vendu
     *
     * @return boolean
     */
    public function getVendu()
    {
        return $this->vendu;
    }

    /**
     * Set loue
     *
     * @param boolean $loue
     *
     * @return Vannonce
     */
    public function setLoue($loue)
    {
        $this->loue = $loue;

        return $this;
    }

    /**
     * Get loue
     *
     * @return boolean
     */
    public function getLoue()
    {
        return $this->loue;
    }

    /**
     * Set test
     *
     * @param boolean $test
     *
     * @return Vannonce
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return boolean
     */
    public function getTest()
    {
        return $this->test;
    }
}
