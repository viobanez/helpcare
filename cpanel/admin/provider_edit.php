<?php
	include 'includes/session.php';

	if(isset($_POST['editprovi'])){

		$id = $_POST['id'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contact_info = $_POST['contact_info'];
		$service = $_POST['service'];
		$service_cat = $_POST['service_cat'];
		$rate = $_POST['rate'];

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		try{
			$stmt = $conn->prepare("UPDATE users SET email=:email, password=:password, firstname=:firstname, lastname=:lastname, address=:address, contact_info=:contact_info, service=:service, service_cat=:service_cat, rate=:rate WHERE id=:id");
			$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'address'=>$address, 'contact_info'=>$contact_info, 'service'=>$service, 'service_cat'=>$service_cat, 'rate'=>$rate, 'id'=>$id]);
			$_SESSION['success'] = 'Provider updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit provider form first';
	}

	header('location: provider.php');

?>