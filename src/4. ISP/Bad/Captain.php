<?php 

namespace Example\SolidPrinciple\ISP\Bad;

class Captain
{
    public function manage(Worker $worker): void
    {
        $worker->work();
        $worker->sleep();
    }
}