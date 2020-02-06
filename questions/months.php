<!-- Output should be as a table -->
<!-- Months with 31 days in red color, wit 30 days in grenn color -->

<?php

    $arr = [
        "January" => 31,
        "February" => 28,
        "March" => 31,
        "April" => 30,
        "May" => 31,
        "June" => 30,
        "July" => 31,
        "August" => 31,
        "September" => 30,
        "October" => 31,
        "November" => 30,
        "December" => 31,
    ];

echo "<table>";

    foreach($arr as $k=>$v){
        if( $v==30 ){
            echo "<tr>";
            echo "<td>$k</td>";
            echo "<td>$v</td>";
            echo "</tr>";
        }
    }

echo "</table>";

