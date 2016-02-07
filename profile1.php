<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body align="center">
    <?php
    $name = $_GET['name'];
    $lname =$_GET['lname'];
    $id = $_GET['id'];
    $edu = $_GET['edu'];
    $nname = $_GET['nname'];
    $sex = $_GET['sex'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $phone = $_GET['phone'];
    $hobby = $_GET['hobby'];



    echo "<p>";
    echo "<b>ข้อมูลที่กรอกมา</b><br/>";
    echo "ชื่อ-นามสกุล : $name ";
    echo " $lname </br>";
    echo "รหัสนักศึกษา : $id </br>";
    echo "ระดับการศึกษา : $edu </br>";
    echo "ชื่อเล่น : $nname </br>";
    echo "เพศ : $sex </br>";
    echo "อีเมลล์ : $email </br>";

    if($age > 0 && $age<60){
      echo "อายุ : $age  ปี </br>";
    }elseif ($age>=60 && $age<=100) {
      echo "อายุ : เกษียณ </br>";
    }
      else{
      echo "อายุ : คุณกรอกอายุผิดพลาด</br>";

    }

    echo "เบอร์โทรศัพท์ : $phone </br>";
    echo "งานอดิเรก : $hobby </br></br></br>";









     ?>
  </body>
</html>
