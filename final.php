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
if ($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);
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
////-------------------------- (m -> M) تغيير
//         echo "we are here" ;
//$my_query ="INSERT INTO name (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) VALUES (".$slider1.",".$slider2.",".$slider3.",".$slider4.",".$slider5.",".$slider6.")";
//$result = $conn -> query($my_query) ;
//echo $result ;
//}
//if($result)
//
//{
//echo"done !";
//}
//else
//{
// echo"error";
}
// this is my code
    //-------------------------- (m -> M) تغيير
    $my_query ="INSERT INTO name (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) VALUES (".$slider1.",".$slider2.",".$slider3.",".$slider4.",".$slider5.",".$slider6.")";


    if ($conn->query($my_query) === TRUE) {
        echo " record Updated successfully";
    } else {
        echo "Error: " . $my_query . "<br>" . $conn->error;
    }

    $conn->close();

// here my code ends
}
?>