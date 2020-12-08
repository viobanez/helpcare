<?php
	include 'includes/session.php';

	if(isset($_POST['subcat_edit'])){
		$id = $_POST['id'];
		$subcat_name = $_POST['subcat_name'];

		try{
			$stmt = $conn->prepare("UPDATE sub_category SET subcat_name=:subcat_name WHERE id=:id");
			$stmt->execute(['subcat_name'=>$subcat_name, 'id'=>$id]);
			$_SESSION['success'] = 'Sub Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit category form first';
	}

	header('location: sub-categories.php');

?>