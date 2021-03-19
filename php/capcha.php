<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $c = rand(00, 99);
    $c1 = rand(0, 9);
    $a = $c + $c1;
    if (isset($_POST["sub"])) {
        if ($_POST["t1"] == $_POST["t2"]) {
            echo "yes";
        } else {
            echo "no";
        }
    }
    ?>
    <div align="center" style="padding-top: 30px;width:200px;height:50px;background:#8EA8BF">
        <?php
        echo $c . "+" . $c1 . "<br>";
        ?>
    </div>
    <form action="?" method="post">
        <input type="text" name="t1">
        <input type="hidden" name="t2" value="<?php echo $a; ?>">
        <input type="submit" name="sub" value="ok">
    </form>
</body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
    // $random = rand(0, 9);
    // echo $random . "<br>"; -->

    // $number = preg_split('//', $random, -1, PREG_SPLIT_NO_EMPTY);

    // $arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];

    // for ($i = 0; $i < count($number); $i++) {
    //     $replace = preg_replace("/" . $number[$i] . "/", $arr[$number[$i]], $number[$i]);
        // echo $replace." ";
    // }
    // echo "<br>";

    // if (isset($_POST["sub"])) {
    //     if ($_POST["text"] == $_POST["hidden"]) {
    //         echo "yes";
    //     } else {
    //         echo "no";
    //     }
    // }

    // echo "<br>";
    // echo $_POST["text"];
    // echo "<br>";
    // echo $_POST["hidden"];
    // ?>

    <form action="?" method="post">
        <input type="text" name="text">
        <!-- <input type="hidden" name="hidden" value="<?php echo $replace; ?>"> -->
        <input type="submit" name="sub" value="ok">
    </form>

</body>

</html> -->