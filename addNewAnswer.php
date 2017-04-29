<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "chatbot";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($conn, "utf8");

echo 'insert';
$answer = $_POST['answer'];
$question = $_POST['question'];
echo $answer."<br>".$question;


			 $sql = "INSERT INTO ans_bot (firstanswer, answer)VALUES ('".$question."','".$answer."')";
			 $query = mysqli_query($conn,$sql);
			 echo $sql;

?>
