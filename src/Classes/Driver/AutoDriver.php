<?php

namespace TestAutoTransportApp\Classes\Driver;

class AutoDriver extends BaseDriver
{
    public function __construct(float $kilometerRate = null)
    {
        parent::__construct($kilometerRate);
        $this->category = 'auto';
        $this->categoryFactor = 1.5;
    }
}
