<?php 

namespace Exaple\SolidPrinciple\SRP\Good;

use Example\SolidPrinciple\SRP\Good\Document;

interface Exportable
{
    public function export(Document $document): void;
}