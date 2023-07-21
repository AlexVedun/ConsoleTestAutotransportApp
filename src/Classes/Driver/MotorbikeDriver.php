<?php

namespace TestAutoTransportApp\Classes\Driver;

class MotorbikeDriver extends BaseDriver
{
    public function __construct()
    {
        $this->category = 'motorbike';
        $this->categoryFactor = 1.1;
    }
}
