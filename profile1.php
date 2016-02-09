<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body align="center">
      <br><br>
    <table align="center">
      <tr>
        <td align="center" bgcolor="#F5F5F5"> <big> [ ข้อมูลที่ผู้ใช้กรอกมา ] </big></td>
      </tr>
      <tr>
        <td>
          <br><br>
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
    $bdate = $_POST['bdate'];
    $bmonth = $_POST['bmonth'];
    $byear = $_POST['byear'];
    $since = $byear-543;
    $mailtype =$_POST['mailtype'];
    $hob1 = $_POST['hob1'];
    $hob2 = $_POST['hob2'];
    $hob3 = $_POST['hob3'];
    $hob4= $_POST['hob4'];
    $other= $_POST['other'];
    $other2= $_POST['other2'];

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


    echo "งานอดิเรก : ";
    if (isset($hob1) && $hob1=="1") echo "ดูหนัง ฟังเพลง ";
    if (isset($hob2) && $hob2=="2") echo "เล่นเกม ";
    if (isset($hob3) && $hob3=="3") echo "อ่านหนังสือ ";
    if (isset($hob4) && $hob4=="4") echo "เขียนโค้ด ";
    //else{
    //  echo "ไม่มีงานอดิเรก/ความสนใจ";
    //}
    if (isset($other) && $other=="5") echo "$other2 ";
    echo "<br><br><br>";
     ?>
   </td>
 </tr>
     <tr>
       <td align="center" bgcolor="#F5F5F5">
     <input type=button onClick='window.history.back()' value='ย้อนกลับ'>
   </td>
 </tr>
  </table>
  </body>
</html>
