<!DOCTYPE HTML>
<html>
<head>
    <style>
        input[type = number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #read {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Read Number</h2>
<form method="post">
    <input type="number" name="number" placeholder="Enter number" value="">
    <input type="submit" id="read" value="Read">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];

    function unitNumber($number)
    {
        if ($number >= 0 && $number <= 12) {
            switch ($number) {
                case null:
                    break;
                case 0: ?>
                    <span>zero</span>
                    <?php
                    break;
                case 1: ?>
                    <span>one</span>
                    <?php
                    break;
                case 2: ?>
                    <span>two</span>
                    <?php
                    break;
                case 3: ?>
                    <span>three</span>
                    <?php
                    break;
                case 4: ?>
                    <span>four</span>
                    <?php
                    break;
                case 5: ?>
                    <span>five</span>
                    <?php
                    break;
                case 6:
                    ?>
                    <span>six</span>
                    <?php
                    break;
                case 7:
                    ?>
                    <span>seven</span>
                    <?php
                    break;
                case 8:
                    ?>
                    <span>eight</span>
                    <?php
                    break;
                case 9:
                    ?>
                    <span>nine</span>
                    <?php
                    break;
                case 10:
                    ?>
                    <div>ten</div>
                    <?php
                    break;
                case 11:
                    ?>
                    <div>eleven</div>
                    <?php
                    break;
                case 12:
                    ?>
                    <div>twelve</div>
                    <?php
                    break;
            }
        }
    }

    if ($number >= 13 && $number <= 19) {
        $num = $number - 10;
        switch ($num) {
            case 3:
                ?>
                <span>thirteen</span>
                <?php
                break;
            case 4:
                ?>
                <span>fourteen</span>
                <?php
                break;
            case 5:
                ?>
                <span>fifteen</span>
                <?php
                break;
            case 6:
                ?>
                <span>sixteen</span>
                <?php
                break;
            case 7:
                ?>
                <span>seventeen</span>
                <?php
                break;
            case 8:
                ?>
                <span>eighteen</span>
                <?php
                break;
            case 9:
                ?>
                <span>nineteen</span>
                <?php
                break;
        }
    }

    function twoNumber($number)
    {
        if ($number >= 20) {
            $num = $number % 10;
            switch ($number - $num) {
                case 20:
                    ?>
                    <span>twenty</span>
                    <?php
                    break;
                case 30:
                    ?>
                    <span>thirty</span>
                    <?php
                    break;
                case 40:
                    ?>
                    <span>fourty</span>
                    <?php
                    break;
                case 50:
                    ?>
                    <span>fifty</span>
                    <?php
                    break;
                case 60:
                    ?>
                    <span>sixty</span>
                    <?php
                    break;
                case 70:
                    ?>
                    <span>seventy</span>
                    <?php
                    break;
                case 80:
                    ?>
                    <span>eighty</span>
                    <?php
                    break;
                case 90:
                    ?>
                    <span>ninety</span>
                    <?php
                    break;
            }
            unitNumber($num);
        }
    }

        if ($number >= 100) {
            $twoNumber = $number % 100;
            switch (floor($number - $twoNumber)) {
                case 100:
                    ?>
                    <span>one hundred</span>
                    <?php
                    break;
                case 200:
                    ?>
                    <span>two hundred</span>
                    <?php
                    break;
                case 300:
                    ?>
                    <span>three hundred</span>
                    <?php
                    break;
                case 400:
                    ?>
                    <span>four hundred</span>
                    <?php
                    break;
                case 500:
                    ?>
                    <span>five hundred</span>
                    <?php
                    break;
                case 600:
                    ?>
                    <span>six hundred</span>
                    <?php
                    break;
                case 700:
                    ?>
                    <span>seven hundred</span>
                    <?php
                    break;
                case 800:
                    ?>
                    <span>eight hundred</span>
                    <?php
                    break;
                case 900:
                    ?>
                    <span>nine hundred</span>
                    <?php
                    break;
            }
            twoNumber($twoNumber);
        }

//    unitNumber($number);
    twoNumber($number);

}
?>
</body>
</html>