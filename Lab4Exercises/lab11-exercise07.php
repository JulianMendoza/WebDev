<html>
<head>
<title>Exercise 8-7</title>
</head>
<body>
<h1>Simple Calendar using Loops</h1>

<table border="1">
  <?php
  echo "<tr>"."<th colspan=\"7\">".date("F")."</th>"."</tr>";
  ?>
<tr>
  <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
</tr>
<?php
$dayOne = date("w",mktime(0,0,0,date("n"),1, date("Y")));
$count=0;
  $day=0;
  while ($day<date("t")) {
   //when we need a new row go ahead.
   if ($count%7==0) {
   echo "</tr><tr>";
   if($count==0){
    echo "</tr><tr>";
     for($i=0;$i<$dayOne;$i++){
       echo "<td></td>";
       $count++;
     }
   }
   }
   echo "<td>".($day+1)."</td>";
   $day++;
   $count++;
  }
?>

</table>


</body>
</html>
