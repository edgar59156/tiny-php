<?php

namespace Tiny;

abstract class Page
{
    protected string $title = 'Mi App';

    public function getTitle(): string
    {
        return $this->title;
    }

    abstract public function render(): string;
}
