<?php

namespace TestAutoTransportApp\Classes\Driver;

class MinibusDriver extends BaseDriver
{
    public function __construct(float $kilometerRate = null)
    {
        parent::__construct($kilometerRate);
        $this->category = 'minibus';
        $this->categoryFactor = 2.1;
    }
}
