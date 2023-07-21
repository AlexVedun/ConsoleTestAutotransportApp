<?php

namespace Classes;

use TestAutoTransportApp\Classes\AbilityResult;
use PHPUnit\Framework\TestCase;

class AbilityResultTest extends TestCase
{

    public function testIsAble()
    {
        $abilityResult = new AbilityResult();

        $this->assertSame(false, $abilityResult->isAble());

        $abilityResult->checkPassengersCount();
        $abilityResult->checkBaggageWeight();

        $this->assertSame(false, $abilityResult->isAble());

        $abilityResult->checkDistance();

        $this->assertSame(true, $abilityResult->isAble());
    }

    public function testGetDisabilityReason()
    {
        $abilityResult = new AbilityResult();

        $abilityResult->checkPassengersCount();
        $abilityResult->checkBaggageWeight();
        $abilityResult->checkDistance();

        $this->assertSame('', $abilityResult->getDisabilityReason());
    }
}
