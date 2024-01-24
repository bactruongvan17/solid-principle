<?php 

namespace Example\SolidPrinciple\ISP\Good;

class AndroidWorker implements Workable, Managable
{
    public function work(): string
    {
        return 'Human is working';
    }

    public function beManaged(): void
    {
        $this->work();
    }
}