<?php

namespace TestAutoTransportApp\Classes\Driver;

class MinibusDriver extends BaseDriver
{
    public function __construct()
    {
        $this->category = 'minibus';
        $this->categoryFactor = 2.1;
    }
}
