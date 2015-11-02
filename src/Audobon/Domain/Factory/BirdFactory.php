<?php
/**
 * Created by PhpStorm.
 * User: marty
 * Date: 10/2/15
 * Time: 2:26 PM
 */
namespace Audobon\Domain\Factory;
use Audobon\Domain\Entity\Bird;

class BirdFactory
{
    public function createBird(){
        $bird = new Bird();
        $bird->setSpecies("");
        $bird->setDescription("");

        return $bird;
    }
}


