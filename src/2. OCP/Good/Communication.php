<?php 

namespace Example\SolidPrinciple\OCP\Good;

class Communication
{
    public function communicate(Commiunicative $animal): string
    {
        return $animal->speak();
    }
}