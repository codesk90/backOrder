<?php 
	//Connection
	include("../dbconnect.php");

	if (isset($_POST['done'])) {

		//Assign variables
		$styleNumber = $_POST['style_number'];
		$customerName = $_POST['customer_name'];
		$phoneNumber = $_POST['phone_number'];
		$email = $_POST['email'];
		$date = date("Y-m-d");

		//Insert into database
		$sql = "INSERT INTO db_back_order (style_number, customer_name, phone_number, email, date) VALUES ('$styleNumber', '$customerName', '$phoneNumber', '$email', '$date')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	if (isset($_POST['display'])) {
		if ($_POST['style_number'] != '') {
			$sql = "SELECT * FROM db_back_order WHERE style_number = '".$_POST['style_number']."'";
		}

		$result = mysqli_query($conn, $sql);

		echo "<tr>
        		<th>Style #</th>
            	<th>Customer Name</th>
            	<th>Phone #</th>
            	<th>Email</th>
            	<th>Date</th>
            	<th>Edit</th>
        	</tr>";
		while ($row = mysqli_fetch_array($result)) {

			$id = $row["id"];
			$style = $row["style_number"];
			$customer = $row["customer_name"];
			$phone = $row["phone_number"];
			$email = $row["email"];
			$date = $row["date"];

			echo "<tr>
					<td> {$style} </td>
					<td> {$customer} </td>
					<td> {$phone} </td>
					<td> {$email} </td>
					<td> {$date} </td>
					<td><a href='./database/api.php?del={$id}'>Delete
					</td>
				</tr>";
		}
	}

	if (isset($_GET['del'])) {
		$id = $_GET['del'];

		$sql = "DELETE FROM db_back_order WHERE id = '$id'";
		$result = mysqli_query($conn, $sql) or die("Failed".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
	}
	/*
	if (isset($_GET['del'])) {

		$id = $_GET['del'];
		$sql = "DELETE FROM db_back_order WHERE id = '$id'";
		$result = mysqli_query($conn, $sql) or die("Failed" .mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
	}
	*/
	$conn->close();

?>