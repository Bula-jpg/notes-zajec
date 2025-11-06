<?php

if( isset( $_GET["liczba"] ) ){
    $liczba = $_GET["liczba"];

    $bin = "";
    $najwiekszy_bin = 1;

    while(true){
        $najwiekszy_bin *= 2;

        if($najwiekszy_bin >= $liczba){
            break;
        }
    }

    if($najwiekszy_bin != $liczba){
        $najwiekszy_bin /= 2;
    }

    while($najwiekszy_bin != 1){
        if($najwiekszy_bin <= $liczba){
            $bin = $bin."1 ";
            $liczba -= $najwiekszy_bin;
            $najwiekszy_bin = $najwiekszy_bin / 2;
        } else {
            $bin = $bin."0 ";
            $najwiekszy_bin = $najwiekszy_bin / 2;
        }
    }

    if($liczba == 1 && $najwiekszy_bin == 1){
        $bin = $bin."1 ";
    } else {
        $bin = $bin."0 ";
    }

    echo "BIN: ".$bin;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEC to BIN</title>
</head>
<body>
    <form>
        <input type="number" name="liczba" id="liczba">
        <button type="submit">Convert</button>
    </form>
</body>
</html>