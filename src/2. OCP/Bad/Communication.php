<?php 

namespace Example\SolidPrinciple\OCP\Bad;

class Communication
{
    public function communicate($animal): string
    {
        switch (true) {
            case $animal instanceof Dog:
                return $animal->bark();
            case $animal instanceof Duck:
                return $animal->quack();
            case $animal instanceof Fox:
                return $animal->whatDoesTheFoxSay();
            default:
                throw new \InvalidArgumentException('Unknow animal');
        }
    }
}