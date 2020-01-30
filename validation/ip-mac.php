<?php

    $ipv4 = "172.0.0.1";
    $ipv6 = "200::1";
    $mac = "AB-CD-12-12-DC-BA";

    if( filter_var($ipv4,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)) {
        echo "The <b>$ipv4</b> is a valid IPV4 address <br>";
    }else{
        echo "The <b>$ipv4</b> is an invalid IPV4 address <br>";
    }

    if( filter_var($ipv6,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)) {
        echo "The <b>$ipv6</b> is a valid IPV6 address <br>";
    }else{
        echo "The <b>$ipv6</b> is an invalid IPV6 address <br>";
    }

    if( filter_var($mac,FILTER_VALIDATE_MAC)) {
        echo "The <b>$mac</b> is a valid MAC address <br>";
    }else{
        echo "The <b>$mac</b> is an invalid MAC address <br>";
    }

?>