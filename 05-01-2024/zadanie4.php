<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    

<?php
    $rok = 2024;

    if(($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0)
        echo "rok przestepny";
    else
        echo "rok nieprzestepny";

    $stulecie = ceil($rok / 100);
    echo "Nalezy do stulecia: ". $stulecie;
?>

</body>
</html>