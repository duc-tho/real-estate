<?php

namespace App\DTOs;

class PageDTO
{
    private string $title = '';
    private array $viewData = [];

    public function __construct($title, $viewData)
    {
        $this->title = $title;
        $this->viewData = $viewData;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getViewData(): array
    {
        return $this->viewData;
    }

    public function setViewData(array $viewData): self
    {
        $this->viewData = $viewData;

        return $this;
    }
}
