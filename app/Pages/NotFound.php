<?php

namespace App\Pages;

use Tiny\Page;

class NotFound extends Page
{
    protected string $title = 'Página no encontrada';

    public function render(): string
    {
        return <<<HTML
            <div class="text-center">
                <h1 class="display-4">404</h1>
                <p class="lead">Lo sentimos, la página que buscas no existe.</p>
                <a href="/?page=Home" class="btn btn-primary">Volver al inicio</a>
            </div>
        HTML;
    }
}
