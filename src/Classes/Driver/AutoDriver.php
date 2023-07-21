<?php

namespace TestAutoTransportApp\Classes\Driver;

class AutoDriver extends BaseDriver
{
    public function __construct()
    {
        $this->category = 'auto';
        $this->categoryFactor = 1.5;
    }
}
