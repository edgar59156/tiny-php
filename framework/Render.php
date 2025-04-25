<?php

namespace Tiny;

function render(string $viewPath, array $data = []): string
{
    extract($data);

    ob_start();
    include $viewPath; // carga la vista (home.php)
    $content = ob_get_clean();

    ob_start();
    include __DIR__ . '/View/Layout/Main.php'; // layout
    return ob_get_clean();
}
