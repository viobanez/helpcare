<?php
	include 'includes/session.php';

	if(isset($_POST['addprovider'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		$brgy = $_POST['brgy'];
		$street_name = $_POST['street_name'];
		$city = $_POST['city'];
		
		$birthday = $_POST['birthday'];
		$age = $_POST['age'];
		$contact = $_POST['contact'];
		$type = $_POST['type'];
		$photo = $_POST['photo'];
		$service_photo = $_POST['service_photo'];
		$certificates_photo = $_POST['certificates_photo'];
		$govid_photo = $_POST['govid_photo'];
		$service_cat = $_POST['service_cat'];
		$rate = $_POST['rate'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if ( $age < 18 ) {
			$_SESSION['error'] = '18 years old below are not allowed to register';
			header('location: provider.php');
			return;
		}

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already taken';
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['photo']['name'];
			$filename1 = $_FILES['service_photo']['name'];
			$filename2 = $_FILES['certificates_photo']['name'];
			$filename3 = $_FILES['govid_photo']['name'];
			$now = date('Y-m-d');
			if(!empty($filename)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
			}
			if(!empty($filename1)){
				move_uploaded_file($_FILES['service_photo']['tmp_name'], '../images/'.$filename1);	
			}
			if(!empty($filename2)){
				move_uploaded_file($_FILES['certificates_photo']['tmp_name'], '../images/'.$filename2);	
			}
			if(!empty($filename3)){
				move_uploaded_file($_FILES['govid_photo']['tmp_name'], '../images/'.$filename3);	
			}
			try{
				$stmt = $conn->prepare("INSERT INTO users (email, password, firstname, lastname, brgy, street_name, city, birthday, age, contact_info, photo, service_photo, certificates_photo, govid_photo, status, type, service_cat, rate, created_on) VALUES (:email, :password, :firstname, :lastname, :brgy, :street_name, :city, :birthday, :age, :contact, :photo, :service_photo, :certificates_photo, :govid_photo, :status, :type, :service_cat, :rate, :created_on)");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'brgy'=>$brgy, 'street_name'=>$street_name, 'city'=>$city, 'birthday'=>$birthday, 'age'=>$age, 'contact'=>$contact, 'photo'=>$filename, 'service_photo'=>$filename1, 'certificates_photo'=>$filename2, 'govid_photo'=>$filename3, 'status'=>'Processing', 'type'=>2, 'service_cat'=>$service_cat, 'rate'=>$rate, 'created_on'=>$now]);
				
				$_SESSION['success'] = 'Provider added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up provider form first';
	}

	header('location: provider.php');

?>