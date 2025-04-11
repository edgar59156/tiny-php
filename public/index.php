<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tiny\View\Component;

echo Component::button([
    'label' => 'Guardar',
    'type' => 'submit',
    'class' => 'btn-primary',
]);
