<?php 

namespace Example\SolidPrinciple\ISP\Good;

class HumanWorker implements Workable, Sleepable, Managable
{
    public function work(): string
    {
        return 'Human is working';
    }

    public function sleep(): string
    {
        return 'Human is sleeping';
    }

    public function beManaged(): void
    {
        $this->work();
        $this->sleep();
    }
}