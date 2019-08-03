<?php
function convert_1_digit($number)
{
    $arr = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
    return $arr[$number];
}

function convert_2_digit($number)
{
    $num = substr($number, 0);
    if ($number > 10 && $number < 20) {
        $arr = [1 => 'eleven', 2 => 'twelve', 3 => 'thirteen', 4 => 'fourteen', 5 => 'fifteen', 6 => 'sixteen', 7 => 'seventeen', 8 => 'eighteen', 9 => 'nineteen'];
        return $arr[$num[1]];
    }

    $arr = [1 => 'ten', 2 => 'twenty', 3 => 'thirty', 4 => 'forty', 5 => 'fifty', 6 => 'sixty', 7 => 'seventy', 8 => 'eighty', 9 => 'ninety'];

    if (substr($number, 1) == 0) {
        return $arr[$num[0]];
    }

    return $arr[$num[0]] . ' ' . convert_1_digit($num[1]);
}

function convert_3_digit($number)
{
    $num = substr($number, 0);
    if ($num[1] == 0 && $num[2] == 0) {
        return convert_1_digit($num[0]) . ' ' . 'hundred';
    }
    if ($num[1] == 0 && $num[2] !== 0) {
        return convert_1_digit($num[0]) . ' ' . 'hundred' . ' ' . 'and' . ' ' . convert_1_digit($num[2]);
    }

    return convert_1_digit($num[0]) . ' ' . 'hundred and' . ' ' . convert_2_digit(substr($number, 1));
}

function convert_to_word($number)
{
    switch (strlen($number)) {
        case 1:
            return convert_1_digit($number);
            break;
        case 2:
            return convert_2_digit($number);
            break;
        case 3:
            return convert_3_digit($number);
            break;
        default:
            return 'Out of ability';
            break;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="number">
    <button type="submit">OK</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];

    echo convert_to_word($number);
}
?>
</body>
</html>
