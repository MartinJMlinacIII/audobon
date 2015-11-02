<?php
use Audobon\Domain\Entity\Sighting;

describe('Sighting', function(){
    require __DIR__.'/../../vendor/autoload.php';
    beforeEach(function(){
        $this->sighting =  new Sighting();
        $this->sighting->setLocation('Grand Rapids');
    });

    describe('->getLocation()', function() {
        it("should return the location of Sighting", function(){
            $location = $this->sighting->getLocation();
            assert($location === 'Grand Rapids', "expect Grand Rapids");
        });
    });
});
