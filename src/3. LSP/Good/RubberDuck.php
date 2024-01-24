<?php 

namespace Exaple\SolidPrinciple\LSP\Good;

class RubberDuck implements Quackable, Swimmable
{
    private bool $isTurnOn = false;

    public function quack(): string
    {
        if ($this->isTurnOn) {
            return 'quack quack quack';
        }
        throw new \Exception('A rubber duck can\'t quack');
    }

    public function swim(): string
    {
        if ($this->isTurnOn) {
            return 'swim swim swim';
        }
        throw new \Exception('A rubber duck can\'t swim');
    }
}