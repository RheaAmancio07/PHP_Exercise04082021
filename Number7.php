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
    <p style="float:left; margin: 5px">7. Write a program to convert a digit into its word counterpart. E.g. 721 - Seven Two One 
    </p>
    <center>
        Enter the Number:  
        <input  class="input" type="number" name="number">  
        <input  class="btn btn-primary" type="submit"  name="submit" value="Submit"><br> 
        <?php
        function getNumber($digit){              
            switch($digit){
                
                case '0':
                    echo "Zero ";
                    break;
                case '1':
                    echo "One ";
                    break;
                case '2':
                    echo "Two ";
                    break;
                case '3':
                    echo "Three ";
                    break;
                case '4':
                    echo "Four ";
                    break;
                case '5':
                    echo "Five ";
                    break;
                case '6':
                    echo "Six ";
                    break;
                case '7':
                    echo "Seven ";
                    break;
                case '8':
                    echo "Eight ";
                    break;
                case '9':
                    echo "Nine ";
                    break;
                                    
            }

        }    
        function display($inputNum){
            $strLength = strlen((string)$inputNum);
            for ($counter=0; $counter <$strLength ; $counter++) { 
                getNumber($inputNum[$counter]);
            }
        }
        if(isset($_POST['submit'])){
            $inputNum = $_POST['number'];
            display($inputNum);
        }
    ?>
   </center>
  </form>
 

</body>  
</html>  
    