<?php
function convert_1_digits($n)
{
    $array = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
    return $array[$n];
}

function convert_2_digits($n)
{
    $small20 = [11 => 'eleven', 12 => 'twelve', 13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen', 16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen', 19 => 'nineteen'];
    if ($n > 10 && $n < 20) {

        return $small20[$n];
    };

    $teens = [2 => 'twenty', 3 => 'thirty', 4 => 'forty', 5 => 'fifty', 6 => 'sixty', 7 => 'seventy', 8 => 'eighty', 9 => 'ninety'];
    if ($n[1] == 0) {
        return $teens[$n[0]];
    }

    return $teens[$n[0]] . ' ' . convert_1_digits($n[1]);
}

function convert_3_digits($n)
{
    if ($n % 100 == 0) {
        return convert_1_digits($n[0]) . ' hundred';
    }

    if ($n[1] == 0) {
        return convert_1_digits($n[0]) . ' hundred and ' . convert_1_digits($n[2]);
    }
    return convert_1_digits($n[0]) . ' hundred and ' . convert_2_digits(substr($n, 1));
}

function convert_to_word($n)
{
    switch (strlen($n)) {
        case 1:
            $word = convert_1_digits($n);
            break;
        case 2:
            $word = convert_2_digits($n);
            break;
        case 3:
            $word = convert_3_digits($n);
            break;
        default:
            $word = 'out of ability';
    }
    return $word;
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Read Number</title>

</head>
<body>
<div id="content">
    <form method="post">

        <h3>Enter your number: </h3>
        <label>
            <input type="number" name="number"/>
        </label>
        <button type="submit">Read</button>
        <br><br>

        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number = $_POST["number"];

            echo convert_to_word($number);
        }

        ?>
    </form>

</div>
</body>
</html>
