<?php 

namespace Example\SolidPrinciple\ISP\Bad;

interface Worker
{
    public function work(): string;

    public function sleep(): string;
}