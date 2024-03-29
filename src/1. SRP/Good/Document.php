<?php 

namespace Example\SolidPrinciple\SRP\Good;

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
}