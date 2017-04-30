
 <?php
 $answer = $_POST['answer'];
 $question = $_POST['question'];
     $serverName = "localhost";
     $userName = "root";
     $userPassword = "";
     $dbName = "chatbot";
     $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
     mysqli_set_charset($conn, "utf8");

     echo ">|".$answer;
     echo "<br> ขนาดตัวอักษร";
     echo strlen($answer);
     echo "<br>";
     echo ">|".$question;
     echo "<br> ขนาดตัวอักษร";
     echo strlen($question);
     echo "<br>";
     echo "<br>";
         for ($r=0;$r<=strlen($answer)-1;$r++){
             // Loop ครับงานนี้ เพราะเราต้องการแปลงตัวอักษรเป็น ASCII
             //32 = ชองวา่าง
             //59 =;
           echo "ค่ารหัสaครั้งที่ ".$r." =";
 		  $check1=ord(substr($answer, $r, 1));
           echo "<br>";
             if($check1==59){
              $a="1";
             }
         }
         echo "<br>";
         for ($i=0;$i<=strlen($question)-1;$i++){
             // Loop ครับงานนี้ เพราะเราต้องการแปลงตัวอักษรเป็น ASCII
             //32 = ชองวา่าง
             //59 =;
           echo "ค่ารหัสbครั้งที่ ".$i." =";
 		  $check=ord(substr($question, $i, 1));
           echo "<br>";
             if($check==59){
              $b="1";
             }
         }
         echo "<br>".$a;
     if ($b=="1" || $a=="1") {
        echo $a;
        echo "<br>".$b;
           echo "<br>มีคำช่องว่างหรือ ; แฝงในคำสั่ง";

     }
     else {
       $sql = "INSERT INTO ans_bot (firstanswer, answer)VALUES ('".$question."','".$answer."')";
 			 $query = mysqli_query($conn,$sql);
 			 echo $sql;
         echo "<br>ปกติ";
     }
  ?>
