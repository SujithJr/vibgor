<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'collections' => [],
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'selected' : '';
    },
];
