<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $slider1 = $_POST['motor1'];
    $slider2 = $_POST['motor2'];
    $slider3 = $_POST['motor3'];
    $slider4 = $_POST['motor4'];
    $slider5 = $_POST['motor5'];
    $slider6 = $_POST['motor6'];


// معلومات الإتصال بقاعدة البيانات
$conn = new mysqli("localhost","root","","test");
//check
if (!$conn->_connect_error){
    die('Connection failed: ' $conn->connect_error);
 }
 else{  echo "Connection to mysqli: " ;}

    // $stmt =$conn->prepare("insert into motors(motor1,motor2,motor3,motor4,motor5,motor6)
     //value(?,?,?,?,?,?)");
     //$stmt->bind_param("iiiiii",$slider1, $slider2, $slider3, $slider4, $slider5, $slider6);
     //$stmt->execute();
     //echo "success";
     //$stmt->close();
     //$conn->close();

     if(isset($_POST['Save']))
{
 echo"<br>";
$my_query="";
$my_query="select*from name motors";
$result= mysqli_query($conn,$conn_query);
$my_query ="INSERT INTO name (motor1,motor2,motor3,motor4,motor5,motor6) VALUES ('?','?','?','?','?','?')";
$result= mysqli_query($conn,$conn_query);
}
if($result)

{
echo"done !";
}
else
{
 echo"error";
}
    }
}
?>