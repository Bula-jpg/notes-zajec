<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            border-collapse: collapse;
            border: 1px solid black;
        }

        table *{
            border-collapse: collapse;
            border: 0px solid black;
            padding: 2px;
            margin: 0;
            border-spacing: 0;
        }

        .red{
            background-color: red;
        }

        .white{
            background-color: #e6e0e0ff;
        }
    </style>
</head>
<body>

<table>

<?php

$r = 150/4;
$Sx = 240/2;
$Sy = 150/2;

for($i = 1; $i <= 150; $i++){
    echo "<tr>";

    for($j = 1; $j <= 240; $j++){
        $c = pow( ($Sy - $i), 2 ) + pow( ($Sx - $j), 2 );

        $c = sqrt($c);

        if($c <= $r){
            echo "<td class='red'></td>";
        } else {
            echo "<td class='white'></td>";
        }
    }
    
    echo "</tr>";
}

?>

</table>

</body>
</html>