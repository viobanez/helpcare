<?php
	
	include 'includes/session.php';

	if(isset($_POST['signup'])){

		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$birthday = $_POST['birthday'];
		$address = $_POST['address'];

		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['email'] = $email;

		if ( $age < 18 ) {
			$_SESSION['error'] = '18 years old below are not allowed to register';
			header('location: register.php');
			return;
		}


		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: register.php');
		}
		else{
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email already taken';
				header('location: register.php');
			}
			else{
				$now = date('Y-m-d');
				$password = password_hash($password, PASSWORD_DEFAULT);

				//generate code
				$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$code=substr(str_shuffle($set), 0, 12);

				try{
					$stmt = $conn->prepare("INSERT INTO users (email, age, password, firstname, middlename, lastname, birthday, address, activate_code, created_on) VALUES (:email, :age, :password, :firstname, :middlename, :lastname, :birthday, :address, :code, :now)");
					$stmt->execute(['email'=>$email, 'age'=>$age, 'password'=>$password, 'firstname'=>$firstname, 'middlename'=>$middlename, 'lastname'=>$lastname, 'birthday'=>$birthday, 'address'=>$address, 'code'=>$code, 'now'=>$now]);
				//	$userid = $conn->lastInsertId();

				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
					header('location: register.php');
				}
				$pdo->close();
			}
		}
	}
	else{
		$_SESSION['error'] = 'Fill up registration form first';
		header('location: register.php');
	}

?>