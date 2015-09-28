<?php

namespace Audobon\Domain\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $phoneNumber = '';

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
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
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
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Add sighting
     *
     * @param \Audobon\Domain\Entity\Sighting $sighting
     *
     * @return User
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

    /**
     * Get sightings
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSightings()
    {
        return $this->sightings;
    }
}
