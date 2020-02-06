<!-- Sorting the following associative array -->
<!-- array( "Sophia"=>"31", "Jocob"=>"41", "William"=>"39", "Ramesh"=>"40" ) -->

<?php

    $arr = [
        "Sophia"=>"31",
        "Jocob"=>"41",
        "William"=>"39",
        "Ramesh"=>"40"
    ];

    echo "<h2>Sorting by keys</h2>";

    echo "<h4>Ascending order</h4>";
    ksort($arr);
    foreach ( $arr as $key=>$value ){
        echo "Result is: ".$key." => ".$value."<br>";
    }

    echo "<h4>Descending order</h4>";
    krsort($arr);
    foreach ( $arr as $key=>$value ){
        echo "Result is: ".$key." => ".$value."<br>";
    }

    echo "<h2>Sorting by value</h2>";

    echo "<h4>Ascending order</h4>";
    sort($arr);
    foreach ( $arr as $key=>$value ){
        echo "Result is: ".$key." => ".$value."<br>";
    }

    echo "<h4>Descending order</h4>";
    rsort($arr);
    foreach ( $arr as $key=>$value ){
        echo "Result is: ".$key." => ".$value."<br>";
    }

?>