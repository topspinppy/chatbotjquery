
<?php
	sleep(0);
	 $serverName = "localhost";
	 $userName = "root";
	 $userPassword = "";
	 $dbName = "chatbot";
	 $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	 mysqli_set_charset($conn, "utf8");
		$text = $_POST['text'];

	 $sql  = "SELECT * FROM ans_bot WHERE firstanswer = '$text'";
	 $query = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
	 $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

	 $sql1 = "SELECT MAX(id) as a FROM ans_bot";
	 $query1 = mysqli_query($conn,$sql1) or die("Error: ".mysqli_error($conn));
	 $result1=mysqli_fetch_array($query1,MYSQLI_ASSOC);


	 	/*$sql2 = "SELECT COUNT(*) as n FROM ans_bot WHERE firstanswer = '$text'";
		$query2 = mysqli_query($conn,$sql2) or die("Error: ".mysqli_error($conn));
 	 	$result2=mysqli_fetch_array($query2,MYSQLI_ASSOC);*/

		$sql2 ="SELECT * FROM `ans_bot` WHERE firstanswer = '$text' ORDER BY rand() LIMIT 1";
		$query2 = mysqli_query($conn,$sql2) or die("Error: ".mysqli_error($conn));
 	 	$result2=mysqli_fetch_array($query2,MYSQLI_ASSOC);



		 if($result){
			 echo "บอทรู้ ตอบว่า "."<br>";
			  echo $result2['answer']."<br>";
		 }
		 else{
			echo "ฉันไม่รู้";
			 echo $result1['a'];
			 $total = $result1['a'] + 1;
			 $sql = "INSERT INTO ans_bot (id, firstanswer, answer)VALUES ($total,'".$text."','เทส')";
			 $query = mysqli_query($conn,$sql);
			 echo "<br>";
		 }

?>
<?php
mysqli_close($conn);
?>
