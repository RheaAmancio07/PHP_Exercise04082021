<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background:url('https://i.gifer.com/VJi.gif');
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
        div{
            margin:10px;
        }
    </style>
    <title>Sorted Strings Lists</title>
</head>
<body >
    <form action="">
    <div>
    <center>
        <p>6. Write a program to delete the recurring elements inside a sorted list of strings. </p>
    </center>
    <?php
        echo "List of Strings: <br><br>";  
        $str = array('rhea','april','jurick','daryll','jeric','james','yhang','rhea','jurick','jeric','jeric','baboy','ap-ap','tanga','wangkig','dangas','yhang');
        sort($str);
        print_r($str);

        echo "<br><br>";
        
        echo "Sorted list of Strings: <br><br>";  
        $delete = array_unique($str);
        print_r($delete);
    ?>
    </div>
</form>
</body>
</html>
