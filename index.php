<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $metodo="POST";
}else{
    $metodo= "GET";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        ?REQUEST_METHOD?
    </h1>
</body>
</html>