<?php

$stream = opendir(__DIR__);

while ($e = readdir($stream)) {
    echo $e . '<br>';
}