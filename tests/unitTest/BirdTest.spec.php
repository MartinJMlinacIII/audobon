<?php
use Audobon\Domain\Entity\Bird;
use Audobon\Domain\Entity\Sighting;

describe('Bird', function(){
    require __DIR__.'/../../vendor/autoload.php';
    beforeEach(function(){
        $oSighting = new Sighting();
        $oSighting->setLocation('Oxford');
        $grSighting = new Sighting();
        $grSighting->setLocation('Grand Rapids');

        $this->bird =  new Bird();
        $this->bird->addSighting($grSighting);
        $this->bird->addSighting($grSighting);
        $this->bird->addSighting($oSighting);
    });

    describe('->getNumberOfSightings()', function() {
        it("should return the number of sightings a bird has been seen", function(){
            $count = $this->bird->getNumberOfSightings();
            assert($count === 3, "expected 3");
        });
    });

    describe('->getNumberOfSightingsInCity()', function() {
        it("should return the number of sightings a bird has been seen in Grand Rapids", function(){
            $count = $this->bird->getNumberOfSightingsInCity('Grand Rapids');
            assert($count === 2, "expected 2");
        });
    });
    describe('->getNumberOfSightingsInCity()', function() {
        it("should return the number of sightings a bird has been seen in Oxford", function(){
            $count = $this->bird->getNumberOfSightingsInCity('Oxford');
            assert($count === 1, "expected 1");
        });
    });
    describe('->getNumberOfSightingsInCity()', function() {
        it("should return the number of sightings a bird has been seen in Holland", function(){
            $count = $this->bird->getNumberOfSightingsInCity('Holland');
            assert($count === 0, "expected 0");
        });
    });
});
