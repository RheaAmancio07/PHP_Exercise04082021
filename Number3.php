<?php
  $start = 1;
  $end = 12;
?>
<html>
<head>
  <title>Division Table</title>
  <style>
  body{
      background:url('https://i.gifer.com/J4x.gif');
      background-repeat: no-repeat;
      background-size:cover;
      font-size: 20px;
      color:white;
      }
  div{
      border:1px solid black;
      font-size:20px;
      width: 50%;
      margin:5%;
      background-color:beige;
      color:black;  
  }
  table{
      margin-bottom:5%;
      font-size:20px;
      padding:5px;
      color:black;
  }
  </style>

</head>
<body>
  <center>
    <div>
      <h2>Division Table</h2>
      <table border=1>
      <?php
        print("<tr>");
        print("<th> </th>");
        for ($counter = $start;$counter <= $end;$counter++)
          print("<th>$counter</th>");
        print("</tr>");

        for ($counter = $start;$counter <= $end;$counter++){
          print("<tr><th>$counter</th>");
          for ($count_2 = $start;$count_2 <= $end;$count_2++){
              $result = $counter / $count_2;
              printf("<td>%.2f</td>",$result); 
            }
          print("</tr>\n");
        }
      ?> 
    </div>
  </center>
</table>
</body>
</html>