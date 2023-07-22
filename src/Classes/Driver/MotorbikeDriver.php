<?php

namespace TestAutoTransportApp\Classes\Driver;

class MotorbikeDriver extends BaseDriver
{
    public function __construct(float $kilometerRate = null)
    {
        parent::__construct($kilometerRate);
        $this->category = 'motorbike';
        $this->categoryFactor = 1.1;
    }
}
