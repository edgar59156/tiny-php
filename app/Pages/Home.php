<?php

namespace App\Pages;

use Tiny\Page;
use Tiny\View\Component;

class Home extends Page
{
    protected string $title = 'Inicio';

    public function render(): string
    {
        return <<<HTML
            <h1>{$this->getTitle()}</h1>
            <p>Bienvenido a la página de inicio</p>
            {$this->button()}
            {$this->table()}
        HTML;
    }

    protected function button(): string
    {
        return Component::button([
            'label' => 'Guardar',
            'class' => 'btn-success'
        ]);
    }

    protected function table(): string
    {
        return Component::table();
    }
}
