<?php 

namespace Example\SolidPrinciple\ISP\Good;

class Captain
{
    public function managa(Managable $managable): void
    {
        $managable->beManaged();
    }
}