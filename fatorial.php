<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatorial</title>
</head>
<body>
<?php

$num = $_POST['num'];
$total = 1;

for ($i = $num; $i >= 1; $i--) {
    $total *= $i;
}

echo "O fatorial de $num é $total.";

?>
</body>
</html>