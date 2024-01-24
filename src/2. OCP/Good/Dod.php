<?php 

namespace Example\SolidPrinciple\OCP\Good;

class Dog implements Commiunicative
{
    public function speak(): string
    {
        return 'woof woof';
    }
}