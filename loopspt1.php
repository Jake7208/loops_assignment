<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>loops while</title>
    </head>
    <body>
    <?php
    $a = "abc";

    while ($a > 9) { 
        echo $a . " ";
    }
    ?>
    </body><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>loops while</title>
    </head>
    <body>
    <?php
    // while loops
    $a = "0";

    while ($a < 9) { 
        echo "abc ";
        $a++; // increment to count up to 9
    }
    ?>

    <br />
    <?php
    // do while loops
    $i = "0";

    do {
        $i++; // increment so that we can print 9 times
        echo "xyz ";
    } while ($i < 9)
    ?>

    <br />
    <?php // for loop pt 1
    for ($k = "1"; $k < 10; $k++) {
        echo $k . " ";
    }
    ?>

    <br />
    <?php
    for ($j = "1" , $b = "A" ; $j < 8, $b < "G"; $j++, $b++) {
            echo $j . ". Item " . $b ." <br/>";
        }
?>
    </body>
</html>
</html>