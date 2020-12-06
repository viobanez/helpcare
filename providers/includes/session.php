<?php
	include '../includes/conn.php';
	session_start();

	if(!isset($_SESSION['providers']) || trim($_SESSION['providers']) == ''){
		header('location: ../index.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
	$stmt->execute(['id'=>$_SESSION['providers']]);
	$admin = $stmt->fetch();

	$pdo->close();

?>