<?php 

namespace Exaple\SolidPrinciple\LSP\Bad;

class RubberDuck extends Duck
{
    private bool $isTurnOn = false;

    public function quack(): string
    {
        if ($this->isTurnOn) {
            return 'quack quack quack';
        }
        throw new \Exception('A rubber duck can\'t quack');
    }

    public function fly(): string
    {
        throw new \Exception('A rubber duck can\'t fly');
    }

    public function swim(): string
    {
        if ($this->isTurnOn) {
            return 'swim swim swim';
        }
        throw new \Exception('A rubber duck can\'t swim');
    }
}