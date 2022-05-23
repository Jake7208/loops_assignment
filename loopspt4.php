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
        <?php
        echo "<tr>"
        $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        $daysInMonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        echo "<td>Days In Month </td><br />";
        foreach ($months as $key => $month) {
            echo "<td>" . $month . " </td>";
            //echo $days = $daysInMonth[$key] . " ";
        }
        echo "<br />";
        foreach ($daysInMonth as $value => $days) {
            echo $days . " ";
            echo "<tr />"
        }
        ?>
    </body>
</html>