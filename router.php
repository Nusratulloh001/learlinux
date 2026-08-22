<?php

if ($_SERVER['REQUEST_URI'] == '/') {
    require __DIR__ . '/App/Controllers/HomeController.php';
} else if ($_SERVER['REQUEST_URI'] == '/posts') {
    require __DIR__ . '/App/Controllers/PostsController.php';
} else {
    http_response_code(404);
    require __DIR__ . '/App/Views/404.php';
}