<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>loops while</title>
    </head>
    <body>
        <?php 
        for ($square = "1"; $square <= 12; $square++) {
            echo $square . "<sup>2</sup>" . " = " . pow($square,2) . "<br />";  
        }
        ?>
    </body>
</html>