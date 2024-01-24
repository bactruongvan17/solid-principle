<?php 

namespace Example\SolidPrinciple\ISP\Bad;

class HumanWorker implements Worker
{
    public function work(): string
    {
        return 'Human is working';
    }

    public function sleep(): string
    {
        return 'Human is sleeping';
    }
}