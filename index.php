<?php

$u_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($u_agent, 'Chrome') !== false) {
    // echo $u_agent;
    
    $ui_code =  gmdate("i").(gmdate("Y")*gmdate("h")*gmdate("i")).gmdate("i");

    echo ($ui_code ^ 717954048);
}
?>
