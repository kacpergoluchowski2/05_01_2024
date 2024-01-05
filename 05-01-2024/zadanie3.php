<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $kategoria = "elektronika";
    $stawkaPodatkowa = 0;
    $cena = 100;

    switch($kategoria) {
        case "elektronika":
            $stawkaPodatkowa = 0.2;
            break;
        case "odzież":
            $stawkaPodatkowa = 0.1;
            break;
        case "pieczywo":
            $stawkaPodatkowa = 0.05;
            break;
        default:
            $stawkaPodatkowa = 0.15;
            break;
    }

    $podatek = $cena * $stawkaPodatkowa;
    $koncowaCena = $cena + $podatek;
    
    echo "cena koncowa wynowi:". $koncowaCena;

?>
    
</body>
</html>