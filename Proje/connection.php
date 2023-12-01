<?php

	$orderedfood = $_POST['orderedfood'];
	$orderedfoodprice = $_POST['orderedfoodprice'];
	$drink = $_POST['drink'];
	$tableno = $_POST['tableno'];
	$telno = $_POST['telno'];

	$conn = new mysqli("localhost", "root", "", "lospolloshermanos");
	if($conn->connect_error){
		die("Connection Failed: " .$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into siparis(orderedfood, orderedfoodprice ,drink, tableno, telno) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $orderedfood, $orderedfoodprice, $drink, $tableno, $telno);
		$stmt->execute();
		echo 
		"
		<script> alert('Sipariş Alındı'); 
		window.location.href='Giriş.html';

		</script>
		";

		$stmt->close();
		$conn->close();
	}

?>