<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Best Deal</title>
    <style>
        body{
            background:url('https://thumbs.gfycat.com/PaltryIndelibleDromedary-max-1mb.gif');
            background-repeat: no-repeat;
            background-size:cover;
            font-size: 20px;
            
        }
        div{
            margin:15%;
            border: 1px solid white;
            width:36%;
            background-color: beige;
        }
        table{
            margin: 20px;
            font-size: 40px;
            width: 40%;
        }
        
    </style>
</head>
<body>
    <center>
        
        <div>
        <h1>Two Deals of an Items</h1>
            <table BORDER= 1>
                <tr>
                    <th>SET</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>70</th>
                    <th>35</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>100</th>
                    <th>30</th>
                </tr>
            </table>
            <?php
            
            $quantity1 = 70;
            $quantity2 = 100;
            $price1 = 35;
            $price2 = 30;

            $set1 = $price1 / $quantity1;
            $set2 = $price2 / $quantity2;
            
            if ($set1 > $set2){
                echo '<script>alert("Set 1 is the Best Deal!")</script>';
                }else{
                echo '<script>alert("Set 2 is the Best Deal!")</script>'; 
                }
            ?>
        </div>
    </center>
</body>
</html>