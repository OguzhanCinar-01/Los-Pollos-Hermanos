<?php

	if(isset($_POST['fullname']))
	{
		$fullname = $_POST['fullname'];
	}

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
	}

	if(isset($_POST['message']))
	{
		$message = $_POST['message'];
	}

	$conne = new mysqli("localhost", "root", "", "lospolloshermanos");
	if($conne->connect_error)
	{
		die("Connection Failed: " .$conne->connect_error);
	}
	else
	{
		$stmt = $conne->prepare("insert into contact(fullname, email, message) values(?, ?, ?)");
		$stmt->bind_param("sss", $fullname, $email, $message);
		$stmt->execute();

		echo
		"
		<script>
			alert('Mesajınız İletildi.');
			window.location.href='İletişim.html';
		</script>
		";

		$stmt->close();
		$conne->close();
	}
?>