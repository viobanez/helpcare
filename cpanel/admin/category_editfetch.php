<?php
	include 'includes/session.php';

	$output = '';

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM category");
	$stmt->execute();
	foreach($stmt as $row){
		$output .= "
			<option value='".$row['name']."' class='append_itemss'>".$row['name']."</option>
		";
	}

	$pdo->close();
	echo json_encode($output);

?>