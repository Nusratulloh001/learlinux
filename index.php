<?php


require "vendor/autoload.php";

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Helper\Table;

$output = new ConsoleOutput();
$table = new Table($output);

// Задаем заголовки колонок
$table->setHeaders(['ID', 'Имя пользователя', 'Роль', 'Статус']);

// Добавляем строки с данными (можно использовать цветные теги!)
$table->setRows([
    ['1', 'Иван Иванов', 'Администратор', '<info>Активен</info>'],
    ['2', 'Пётр Петров', 'Модератор', '<comment>В отпуске</comment>'],
    ['3', 'Анна Сидорова', 'Пользователь', '<error>Заблокирован</error>'],
]);

// Рендерим таблицу в консоль
$table->render();