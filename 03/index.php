<?php
require_once "db.php";
echo "dir:</br>";
echo __DIR__;
echo "</br>file:</br>";
echo __FILE__;
echo "</br>class:</br>";
echo __CLASS__;
echo "</br>function:</br>";
echo __FUNCTION__;
echo "</br>";

define('USERNAME','admin');
const('USERNAME','admin');

$conection = new db();
$conection->table = "users";
$conection->find(4, array('id', 'name'));

?>
