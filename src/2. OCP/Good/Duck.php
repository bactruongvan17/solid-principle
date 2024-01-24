<?php 

namespace Example\SolidPrinciple\OCP\Good;

class Duck implements Commiunicative
{
    public function speak(): string
    {
        return 'quack quack';
    }
}