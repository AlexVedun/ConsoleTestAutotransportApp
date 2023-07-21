<?php

namespace TestAutoTransportApp\Classes\Driver;

class BusDriver extends BaseDriver
{
    public function __construct()
    {
        $this->category = 'bus';
        $this->categoryFactor = 3.0;
    }
}
