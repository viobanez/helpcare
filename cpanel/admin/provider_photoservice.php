<?php
	include 'includes/session.php';

	if(isset($_POST['uploadproviderservice'])){
		$id = $_POST['id'];
		$filename = $_FILES['service_photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['service_photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE users SET service_photo=:service_photo WHERE id=:id");
			$stmt->execute(['service_photo'=>$filename, 'id'=>$id]);
			$_SESSION['success'] = 'Service Provider photo updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select user to update photo first';
	}

	header('location: provider.php');
?>