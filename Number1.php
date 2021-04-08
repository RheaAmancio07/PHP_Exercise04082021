<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Data</title>
    <style>
        body{
            background:url('https://rakibhhridoy.me/projects/2501.gif');
            background-repeat: no-repeat;
            background-size:cover;
            font-size: 20px;
        }
        table,td,tr,th{
            border: 1px solid black;
            font-size:25px;
        }
        
        div{
            margin-top:18%;
            margin-left:20%;
            border: 1px solid white;
            width:60%;
            background-color: beige;
            font-size:21px;
        }

        table{
            width: 90%;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div>
        <p>1. Write a program to loop over the given JSON data. Display the values via loops or recursion.</p>
        <center>
        <h1>JSON Data</h1>
        <table>
            <tr>
                <td><b>NAME</b></td>
                <td><b>AGE</b></td>
                <td><b>SCHOOL</b></td>
            </tr>
        <?php
        $data = 
            '[
                {
                "name" : "John Garg",
                "age"  : "15",
                "school" : "Ahlcon Public school"
                },
                {
                "name" : "Smith Soy",
                "age"  : "16",
                "school" : "St. Marie school"
                },
                {
                "name" : "Charle Rena",
                "age"  : "16",
                "school" : "St. Columba school"
                }
            ]';

        $converter = json_decode($data,true);
        foreach ($converter as  $value) {
        ?>
        <tr>
            <td><?php echo $value["name"]; ?></td>
            <td><?php echo $value["age"]?></td>
            <td><?php echo $value["school"];?></td>
        </tr>
        <?php
            }
        ?>       
        </table>
        <br>
        </center>
    </div>
</body>
</html>