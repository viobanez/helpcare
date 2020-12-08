
<?php
	include 'includes/session.php';

	if(isset($_POST['subcat_add'])){
		$category = $_POST['category'];
		$subcat_name = $_POST['subcat_name'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM sub_category WHERE subcat_name=:subcat_name");
		$stmt->execute(['subcat_name'=>$subcat_name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Sub Category already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO sub_category (category,subcat_name) VALUES (:category,:subcat_name)");
				$stmt->execute(['category'=>$category, 'subcat_name'=>$subcat_name]);
				$_SESSION['success'] = 'Sub Category added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up category form first';
	}

	header('location: sub-categories.php');

?>