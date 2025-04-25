<?php

namespace Tiny\View;

use Tiny\View\Components\Button;
use Tiny\View\Components\Table;

class Component
{
    public static function button(array $props = []): string
    {
        return (new Button($props))->render();
    }

    public static function table(array $props = []): string 
    {
        return (new Table($props))->render();
    }
}
