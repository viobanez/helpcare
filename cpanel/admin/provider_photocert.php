<?php
	include 'includes/session.php';

	if(isset($_POST['uploadprovidercert'])){
		$id = $_POST['id'];
		$filename = $_FILES['certificates_photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['certificates_photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE users SET certificates_photo=:certificates_photo WHERE id=:id");
			$stmt->execute(['certificates_photo'=>$filename, 'id'=>$id]);
			$_SESSION['success'] = 'Certificate photo updated successfully';
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