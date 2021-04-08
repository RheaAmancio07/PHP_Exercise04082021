<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background:url('https://i.pinimg.com/originals/3d/08/e0/3d08e03cb40252526fee2036a67f07f1.gif');
            background-repeat: no-repeat;
            background-size:cover;
            font-size: 20px;
        }
        form{
            background-color: beige;
            width: 70%;
            margin-top: 15%;
            margin-left: 15%;
        }
        p{
            font-size: 30px;
        }
    </style>
    <title>Sorted Integers Lists</title>
</head>
<body >
    <form action="">
    <center>
        <p>5. Write a program to delete the recurring elements inside a sorted list of integers. </p>
    </center>
    <?php
        echo "List of Integers: <br><br>";  
        $number = array(3,45,34,34,26,5,1,26,45,56,3435,64,67,78,3);
        sort($number);
        print_r($number);
        echo "<br><br>";
        
        echo "Sorted list of Integers: <br><br>";  
        $delete = array_unique($number);
        print_r($delete);
    ?>
    </form>
</body>
</html>
