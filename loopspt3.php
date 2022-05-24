<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>loops while</title>
    </head>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
    <body>
        <table>
        <?php
        echo "<tr>";
        for ($x = "1"; $x <= 7; $x++) { // this runs across each row x axis
            for($y = "1"; $y <= 7; $y++) { // runs across y axis
                
                echo "<td>" . $x * $y ." </td>"; // getting the desired output for the multiplication
            }
            echo "</tr>";
        }
        ?>
        </table>
    
    </body>
</html>