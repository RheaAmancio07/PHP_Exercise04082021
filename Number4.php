<html> 
<head>
    <title>Armstrong Number</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
    <style>
        body{
            background:url('https://i.pinimg.com/originals/63/7a/4d/637a4d42e1738853b2f96ffbbd60622a.gif');
            background-repeat: no-repeat;
            background-size:cover;
            font-size: 20px;
            color:white;
        }
        form{
            margin-top: 10%;
            margin-left: 20%;
            font-size: 25px;
            font-family: Monospace;
            border: 1px solid white;
            width: 60%;
            align-items: center;
            background-color:black;
        }
        .input{
            margin:5%;
            font-size: 25px;
        }
        .btn{
            font-size: 25px;
            radius: 5px;
        }
    </style>
</head>
<body >
 <form method="post">  
    <p style="float:left; margin: 5px">4. Write a program to determine if the number is an Armstrong Number. An Armstrong Number is a number such that the sum of the cubes of its digits is equal to the number itself.
    </p>
    <center>
        Enter the Number:  
        <input  class="input" type="number" name="number">  
        <input  class="btn btn-primary" type="submit" value="Submit">
        <?php  
        if($_POST){     
        $number = $_POST['number'];  
        $temp= $number;  
        $total  = 0;  

        while( $temp != 0 ){  
        $rem   = $temp % 10; 
        $total   = $total + ( $rem * $rem * $rem );
        $temp   = $temp / 10;   
        }  
        if( $number == $total ){  
            // echo '<script>alert("Yes") .$number.(" an Armstrong Number")</script>';  
            echo "<h3> " . $number . " is an Armstrong Number"; 
        }else{  
            // echo '<script>alert("$number is not an Armstrong Number")</script>';  
            echo "<h3> " . $number . " is not an Armstrong Number";
            }  
        }  
    ?>       
   </center>
  </form>
</body>  
</html>  
    