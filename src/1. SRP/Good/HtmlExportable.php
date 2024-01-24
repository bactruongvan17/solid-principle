<?php 

namespace Example\SolidPrinciple\SRP\Good;

use Exaple\SolidPrinciple\SRP\Good\Exportable;

class HtmlExportable implements Exportable
{
    public function export(Document $document): void
    {
        echo "DOCUMENT EXPORTED TO HTML".PHP_EOL;
        echo "Title: ".$document->getTitle().PHP_EOL;
        echo "Content: ".$document->getContent().PHP_EOL.PHP_EOL;
    }
}