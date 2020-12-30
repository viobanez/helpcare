
<?php
	include 'includes/session.php';

	if(isset($_POST['addbooking'])){

		$book_no = $_POST['book_no'];
		$status = $_POST['status'];
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];

		$service_and_rate = $_POST['service_and_rate'];

		$category_name = $_POST['category_name'];

		$b_condition = $_POST['b_condition'];
		
		$date_book = $_POST['date_book'];
		$time = $_POST['time'];
		$address = $_POST['address'];
		$special_instructions = $_POST['special_instructions'];
	
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM booking WHERE book_no=:book_no");
		$stmt->execute(['book_no'=>$book_no]);
		$now = date('Y-m-d');
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Booking No already exist. please reload the booking form';
		}
		else{
			
			try{
				$stmt = $conn->prepare("INSERT INTO booking (book_no, status, user_name, email, service_and_rate, category_name, date_book, time, address, special_instructions, date_added) VALUES (:book_no, :status, :user_name, :email, :service_and_rate,:category_name, :date_book, :time, :address, :special_instructions, :date_added)");
				$stmt->execute(['book_no'=>$book_no, 'status'=>$status,'user_name'=>$user_name, 'email'=>$email, 'service_and_rate'=>$service_and_rate,'category_name'=>$category_name, 'date_book'=>$date_book, 'time'=>$time, 'address'=>$address, 'special_instructions'=>$special_instructions, 'date_added'=>$now]);
				$_SESSION['success'] = 'New Booking added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up booking form first';
	}

	header('location: booking.php');

?>