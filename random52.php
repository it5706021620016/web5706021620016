
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<body>
      <?php
      $i=1;
      for ($rand=0; $rand <13 ; $rand++) {
        for ($c=0; $c <4 ; $c++) {
          $num[$rand][$c]=$i;
          $i++;
        }
      }
      for ($rand=0; $rand <13 ; $rand++) {
        for ($c=0; $c <4 ; $c++) {
          $a=rand(0,12);
          $b=rand(0,3);
          $temp=$num[$rand][$c];
          $num[$rand][$c]=$num[$a][$b];
          $num[$a][$b]=$temp;
          echo  $num[$i][$c];
        }
      }
      ?>
      <br><br>
      <table border="1" height="800" width="800" align="center">
        <tr>
          <td colspan="4" align="center" bgcolor="black"><font color="white">โปรแกรมสุ่มค่าตัวเลข</font>
          </td>
        </tr>

      <?php
      for($rand=0; $rand <13 ; $rand++) { ?>
          <tr>
              <?php  for ($c=0; $c <4 ; $c++) { ?>
                <td align = "center">
                  <?php echo $num[$rand][$c]; ?></td>
            <?php  } ?>
          </tr>
      <?php } ?>

      <tr>
        <td colspan="4" align= "center" bgcolor="black"><input type=button value="สุ่มค่าอีกครั้ง" onClick="javascript:location.reload();"></center></td>
      </tr>
    </table>





</body>
</head>
</html>
