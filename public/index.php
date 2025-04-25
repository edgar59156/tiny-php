<?php

require_once __DIR__ . '/../vendor/autoload.php';

$pageName = $_GET['page'] ?? 'Home';
$pageClass = "App\\Pages\\$pageName";

if (!class_exists($pageClass) || !is_subclass_of($pageClass, Tiny\Page::class)) {
    $pageClass = App\Pages\NotFound::class;
    http_response_code(404);
}

$page = new $pageClass();

$title = $page->getTitle();
$content = $page->render();

require_once __DIR__ . '/../framework/View/Layout/Main.php';
