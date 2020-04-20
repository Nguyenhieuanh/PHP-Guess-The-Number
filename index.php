<?php
function binarySearch($arr, $value, $bot, $top)
{
    if ($top < $bot) {
        return false;
    }

    $mid = ($bot + $top) / 2;
    if ($arr[$mid] > $value) {
        return binarySearch($arr, $value, $bot, $mid - 1);
    } elseif ($arr[$mid] < $value) {
        return binarySearch($arr, $value, $mid + 1, $top);
    } else {
        return true;
    }
}

function main($number)
{
    $arr = range(9, 256, 8);

    if (binarySearch($arr, $number, 0, count($arr) - 1) !== false) {
        die("Found");
    }
    die("Not found");
}

main(208);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Game đoán số</title>
</head>
<body>

</body>
</html>
