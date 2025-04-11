<?php

namespace Tiny\View;

class Component
{
    public static function render($name, $data = [])
    {
        $path = __DIR__ . "/components/{$name}.php";
        if (!file_exists($path)) {
            throw new \Exception("Componente '{$name}' no encontrado.");
        }

        // Extrae variables del array $data como $label, $type, etc.
        extract($data);
        ob_start();
        include $path;
        return ob_get_clean();
    }

    public static function button($data = [])
    {
        return self::render('button', $data);
    }

    public static function table($data = [])
    {
        return self::render('table', $data);
    }
}
