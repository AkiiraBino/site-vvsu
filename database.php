<?php
	function load_base($name, $number, $email, $session_id, $session_name)
	{
		try 
		{
			// подключаемся к серверу
			$conn = new PDO("mysql:host=localhost; port=3306; dbname=site", "root", "Minion082002.424");
			insert_session($conn, $session_id, $session_name);
			insert_user($conn, $name, $number, $email);
		}
		catch (PDOException $e) {
			echo " Database error: " . $e->getMessage();
		}
	}
	
	function insert_session($conn, $session_id, $session_name)
	{
		
		$sql = "SELECT * from session where session_id = :session_id;";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":session_id", $session_id);
		$stmt->execute();
		if ($stmt->rowCount() == 0)
		{
			$sql = "INSERT INTO session (session_id, session_name) VALUES ('$session_id', '$session_name')";
			$affectedRowsNumber = $conn->exec($sql);
		}
	}
	
	function insert_user($conn, $name, $number, $email)
	{
		$sql = "SELECT id from session order by id desc limit 1;";
		$result = $conn->query($sql);
		$id = $result->fetch();
		$id = $id["id"];
		$sql = "SELECT * from user where session_id = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id", $id);
		$stmt->execute();
		if ($stmt->rowCount() == 0)
		{
			$sql = "INSERT INTO user (name, email, phone, session_id) VALUES ('$name', '$email', '$number', $id);";
			$affectedRowsNumber = $conn->exec($sql);
		}
	}
?>	
