<?php

define('DB_NAME', 'tacoOrder');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

if(!$link)
{
    die('Could not connect to database: ' . mysql_error());
}

$db_select = mysql_select_db(DB_NAME);

if(!$db_select)
{
    die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

echo "HOLY EFF";
$name = $_POST('name');
$tacoOrder = $_POST('tacoOrder');

$query = "INSERT INTO orders ('name', 'tacoOrder') VALUES ('{$name}', '{$tacoOrder}')";
if(!mysql_query($query)
{
    die("DAMMIT");
}

$mysql_close();

?>