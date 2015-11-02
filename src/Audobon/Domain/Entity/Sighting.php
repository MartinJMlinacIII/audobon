<?php

namespace Audobon\Domain\Entity;

/**
 * Sighting
 */
class Sighting
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $time;

    /**
     * @var string
     */
    private $location = '';

    /**
     * @var integer
     */
    private $birdId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \Audobon\Domain\Entity\Bird
     */
    private $bird;

    /**
     * @var \Audobon\Domain\Entity\User
     */
    private $user;


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
     * Set date
     *
     * @param string $date
     *
     * @return Sighting
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Sighting
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Sighting
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set birdId
     *
     * @param integer $birdId
     *
     * @return Sighting
     */
    public function setBirdId($birdId)
    {
        $this->birdId = $birdId;

        return $this;
    }

    /**
     * Get birdId
     *
     * @return integer
     */
    public function getBirdId()
    {
        return $this->birdId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Sighting
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set bird
     *
     * @param \Audobon\Domain\Entity\Bird $bird
     *
     * @return Sighting
     */
    public function setBird(\Audobon\Domain\Entity\Bird $bird = null)
    {
        $this->bird = $bird;

        return $this;
    }

    /**
     * Get bird
     *
     * @return \Audobon\Domain\Entity\Bird
     */
    public function getBird()
    {
        return $this->bird;
    }

    /**
     * Set user
     *
     * @param \Audobon\Domain\Entity\User $user
     *
     * @return Sighting
     */
    public function setUser(\Audobon\Domain\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Audobon\Domain\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

