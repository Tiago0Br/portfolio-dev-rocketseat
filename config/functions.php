<?php

function view(string $view, array $data = []): void
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    require_once __DIR__ . '/../src/Views/Templates/app.php';
}