<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $procent = 75;

    if($procent >= 90)
        echo "Ocena 6";
    elseif ($procent >= 80)
        echo "Ocena 5";
    elseif($procent >= 70)
        echo "Ocena 4";
    else if($procent >= 60)
        echo "Ocena 3";
    else
        echo "Ocena 2";
?>

</body>
</html>