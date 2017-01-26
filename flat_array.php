<?php

function flatten($ar) {
    $toflat = array($ar);
    $res = array();

    while (($r = array_shift($toflat)) !== NULL) {
        foreach ($r as $v) {
            if (is_array($v)) {
                $toflat[] = $v;
            } else {
                $res[] = $v;
            }
        }
    }

    return $res;
}

$nested_array = array(
				    1,
				    2,
				    array(
				        3,
				        4,
				        5,
				        array(
				            6,
				            7
				        ),
				        8,
				        9,
				    ),
				    10,
				    11
				);

$array = flatten($nested_array);

print_r($array);
?>
