<?php
	include 'includes/session.php';

	if(isset($_POST['uploadprovidergov'])){
		$id = $_POST['id'];
		$filename = $_FILES['govid_photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['govid_photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE users SET govid_photo=:govid_photo WHERE id=:id");
			$stmt->execute(['govid_photo'=>$filename, 'id'=>$id]);
			$_SESSION['success'] = 'Government ID updated successfully';
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