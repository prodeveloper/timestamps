<?php
$connection='';
$username='';
$password='';
$database='';


$query_format = "ALTER TABLE  `%s` ADD  `updated_at` TIMESTAMP NOT NULL ,
ADD  `created_at` TIMESTAMP NOT NULL ;";

$link = new mysqli($connection, $username, $password, $database);
$tables = $link->query('SHOW TABLES');
$result=[];
while ($row = $tables->fetch_row()) {
    $result[]= sprintf($query_format, $row[0]);
}

echo implode(' ', $result);
