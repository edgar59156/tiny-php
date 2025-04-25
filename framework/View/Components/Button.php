<?php

namespace Tiny\View\Components;

class Button extends BaseComponent
{
    public function render(): string
    {
        $type = $this->e($this->props['type'] ?? 'button');
        $class = $this->e($this->props['class'] ?? '');
        $label = $this->e($this->props['label'] ?? 'Click');

        return <<<HTML
        <button type="{$type}" class="btn {$class}">
            {$label}
        </button>
        HTML;
    }
}
