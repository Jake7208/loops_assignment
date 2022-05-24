<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>loops while</title>
        <style>
        table, td, th {
        border: 1px solid black;
        border-collapse: collapse;
        }

    </style>
    </head>
    <body>
        <table>
        <?php

        $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        $daysInMonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        echo "<tr>";
        echo "<td align=center colspan='12'>Days In Month</th>";
        echo "<tr />";
        echo "<tr>";
        foreach ($months as $key => $month) {
            echo "<td>" . $month . " </td>";
            //echo $days = $daysInMonth[$key] . " ";
        } echo "<tr />";
        echo "<tr>";
        foreach ($daysInMonth as $value => $days) {
            echo "<td>" . $days . " </td>";
        }
        echo "<tr />";
        ?>
        </table>
    </body>
</html>