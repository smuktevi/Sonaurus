<?php
include 'conn.php';
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$genre = $_POST['genre'];
	try {
		
	$stmt=$db->prepare("INSERT INTO users(Username, Password, Genre) VALUES(:user,:pass,:gen)");
	$stmt->bindParam(':user',$username,PDO::PARAM_STR);
	$stmt->bindParam(':pass',$password,PDO::PARAM_STR);
	$stmt->bindParam(':gen',$genre,PDO::PARAM_STR);
	$stmt->execute();
	echo "<br> <h1>Login successful!! </h1><br/>";
	echo "<br/> <h1> Welcome ".$username."</h1>";
}
	catch(Exception $e){
	echo "An error has occurred.";
}


	?>