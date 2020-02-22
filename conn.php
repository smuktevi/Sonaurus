<?php
try{
$db = new PDO('mysql:host=localhost;dbname=users;charset=utf8','root','');

//var_dump($db);
}
catch(Exception $e){
	echo "An error has occurred.";
}
?>