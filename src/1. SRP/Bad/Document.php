<?php 

namespace Example\SolidPrinciple\SRP\Bad;

class Document
{
    public function __construct(
        private readonly string $title,
        private readonly string $content
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string 
    {
        return $this->content;
    }

    public function exportHtml(): void 
    {
        echo "DOCUMENT EXPORTED TO HTML".PHP_EOL;
        echo "Title: ".$this->getTitle().PHP_EOL;
        echo "Content: ".$this->getContent().PHP_EOL.PHP_EOL;
    }

    public function exportPdf(): void 
    {
        echo "DOCUMENT EXPORTED TO PDF".PHP_EOL;
        echo "Title: ".$this->getTitle().PHP_EOL;
        echo "Content: ".$this->getContent().PHP_EOL.PHP_EOL;
    }
}

$document = new Document(
    'Javascript: The Definitive of Guide',
    'Ebook about Javascript'
);

$document->exportHtml();
$document->exportPdf();