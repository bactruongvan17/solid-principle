<?php 

namespace Exaple\SolidPrinciple\LSP\Good;

class Duck implements Quackable, Flyable, Swimmable
{
    public function quack(): string
    {
        return 'quack quack quack';
    }

    public function fly(): string
    {
        return 'fly fly fly';
    }

    public function swim(): string
    {
        return 'swim swim swim';
    }
}