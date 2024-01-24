<?php 

namespace Example\SolidPrinciple\OCP\Good;

class Fox implements Commiunicative
{
    public function speak(): string
    {
        return 'ring-ding-ding-ding-dingeringeding!, wa-pa-pa-pa-pa-pa-pow!';
    }
}