<?php

$database = new PDO('mysql:host=hello-world-with-dc__mysql;dbname=helloWorld', 'hello', 'pass');
echo $database->query('SELECT text FROM indexText WHERE id = 1')->fetchColumn();