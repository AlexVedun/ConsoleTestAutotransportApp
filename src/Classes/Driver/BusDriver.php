<?php

namespace TestAutoTransportApp\Classes\Driver;

class BusDriver extends BaseDriver
{
    public function __construct(float $kilometerRate = null)
    {
        parent::__construct($kilometerRate);
        $this->category = 'bus';
        $this->categoryFactor = 3.0;
    }
}
