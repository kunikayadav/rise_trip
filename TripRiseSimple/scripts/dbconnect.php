<?php

define("DB_NAME", "trip");
define("USER", "root");
define("PASSWORD", "jordan");
define("HOST", "localhost:3308");

$connection = mysql_connect(HOST, USER, PASSWORD);
if(!$connection)
{
    die("Unble to Connect SQL Database Server". mysql_error());
}
else
{
    define("CONNECTION", $connection);
}

$db_select = mysql_select_db(DB_NAME,$connection);
if(!$db_select)
{
    die("Could not select Database". mysql_error());
}

?>