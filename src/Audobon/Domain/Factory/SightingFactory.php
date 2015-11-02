<?php
/**
 * Created by PhpStorm.
 * User: marty
 * Date: 10/2/15
 * Time: 2:26 PM
 */
namespace Audobon\Domain\Factory;
use Audobon\Domain\Entity\Sighting;
use Audobon\Domain\Entity\Bird;
use Audobon\Domain\Entity\User;

class SightingFactory
{
    public function createSighting(Bird $newBird, User $newUser){
        $sighting = new Sighting();
        $sighting->setDate("");
        $sighting->setTime("");
        $sighting->setLocation("");
        $sighting->setBird($newBird);
        $sighting->setUser($newUser);

        return $sighting;
    }
}


