<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body align="center">
    <?php
    $prefix = $_POST['prefix'];
    $name = $_POST['name'];
    $lname =$_POST['lname'];
    $id = $_POST['id'];
    $edu = $_POST['edu'];
    $nname = $_POST['nname'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $hobby = $_POST['hobby'];
    $bdate = $_POST['bdate'];
    $bmonth = $_POST['bmonth'];
    $byear = $_POST['byear'];
    $since = $byear-543;
    $mailtype =$_POST['mailtype'];



    echo "<big>|| ข้อมูลที่ผู้ใช้กรอกมา ||</big><br><br>";
    echo "$prefix $name $lname </br>";
    echo "ชื่อเล่น : $nname </br>";
    echo "รหัสนักศึกษา : $id </br>";
    echo "ระดับการศึกษา : $edu </br>";
    echo "เพศ : $sex </br>";

    echo "เกิดวันที่ $bdate เดือน  $bmonth พ.ศ. $byear (ค.ศ. $since) <br>";
  //  if($age > 0 && $age<60){
  //    echo "อายุ : $age  ปี </br>";
  //  }
    if ($age >=6 && $age<=12) {
      echo "อายุ : $age ปี (ประถมศึกษา)  <br>";
    }
    elseif ($age >=13 && $age <=15) {
      echo "อายุ : $age ปี (มัธยมศึกษาตอนต้น)  <br>";
    }
    elseif ($age >=16 && $age <=18) {
      echo "อายุ : $age ปี (มัธยมศึกษาตอนปลาย)  <br>";
    }
    elseif ($age >=19 && $age <=22) {
      echo "อายุ : $age ปี (อุดมศึกษา)  <br>";
    }

    elseif ($age>=60 && $age<=100) {
      echo "อายุ : เกษียณ </br>";
    }
      elseif ($age<0 && $age>100){
     echo "อายุ : คุณกรอกอายุผิดพลาด</br>";
  }
    else{
      echo " อายุ : <br>" ;
    }
    echo "อีเมลล์ : $email";
    echo "$mailtype </br>";
    echo "เบอร์โทรศัพท์ : $phone </br>";
    echo "งานอดิเรก : $hobby </br></br></br>";

     ?>
  </body>
</html>
