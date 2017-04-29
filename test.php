<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
			<?php
				sleep(3);
			   $serverName = "localhost";
			   $userName = "root";
			   $userPassword = "";
			   $dbName = "chatbot";
				 $text = $_POST['text'];
			   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($conn, "utf8");
			   $sql  = "SELECT * FROM ans_bot Where firstanswer = '".$text."'";

			   $query = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
				 $result=mysqli_fetch_array($query,MYSQLI_ASSOC);


			   echo $result['answer'];

			?>
			<?php
			mysqli_close($conn);
			?>
	</body>
</html>
