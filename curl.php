<?php

$url = 'https://jsonplaceholder.typicode.com/users';
$resultado = file_get_contents($url);
echo "<pre> $resultado </pre>";
