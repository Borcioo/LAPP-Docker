<?php
$host= 'postgres';
$db = 'docker';
$user = 'docker';
$password = 'docker';

$link = pg_connect("host=$host dbname=$db user=$user password=$password port=5432");

if (!$link) {
    echo "Error: Unable to connect to PgSQL." . PHP_EOL;
    print pg_last_error($link);
    exit;
}

echo "Success: A proper connection to PgSQL was made! The docker database is great." . PHP_EOL;

pg_close($link);



