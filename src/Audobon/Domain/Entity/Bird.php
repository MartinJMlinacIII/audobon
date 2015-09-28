<?php

namespace Audobon\Domain\Entity;

/**
 * Bird
 */
class Bird
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $species = '';

    /**
     * @var string
     */
    private $description = '';

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sightings;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sightings = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set species
     *
     * @param string $species
     *
     * @return Bird
     */
    public function setSpecies($species)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return string
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bird
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add sightings
     *
     * @param \Audobon\Domain\Entity\sighting $sightings
     *
     * @return Bird
     */
    public function addsightings(\Audobon\Domain\Entity\sighting $sightings)
    {
        $this->sightings[] = $sightings;

        return $this;
    }

    /**
     * Remove sightings
     *
     * @param \Audobon\Domain\Entity\sighting $sightings
     */
    public function removesightings(\Audobon\Domain\Entity\sighting $sightings)
    {
        $this->sightings->removeElement($sightings);
    }

    /**
     * Get sightings
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getsightings()
    {
        return $this->sightings;
    }

    /**
     * Add sighting
     *
     * @param \Audobon\Domain\Entity\Sighting $sighting
     *
     * @return Bird
     */
    public function addSighting(\Audobon\Domain\Entity\Sighting $sighting)
    {
        $this->sightings[] = $sighting;

        return $this;
    }

    /**
     * Remove sighting
     *
     * @param \Audobon\Domain\Entity\Sighting $sighting
     */
    public function removeSighting(\Audobon\Domain\Entity\Sighting $sighting)
    {
        $this->sightings->removeElement($sighting);
    }
}
