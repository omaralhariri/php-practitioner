<?php

$columns = "username, password, member, any, thing";

$colArray = explode(",", $columns);
 
$num = count($colArray);
$str = "";

for ($i = 0; $i < $num; $i++) {
    if ($i < ($num - 1)) {
        $str .= "?, ";
    } else {
        $str .= "?";
    }
}

echo $str;