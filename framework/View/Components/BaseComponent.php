<?php

namespace Tiny\View\Components;

abstract class BaseComponent
{
    protected array $props;

    public function __construct(array $props = [])
    {
        $this->props = $props;
    }

    abstract public function render(): string;

    protected function e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
