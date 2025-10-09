<?php
function display($a)
{
    echo"<pre>";
    print_r($a);
    echo"</pre>";
}

function display2($a)
{
    echo"<pre>";
    var_dump($a);
    echo"</pre>";
}

function get_moyenne($array) {
    $sum = array_sum($array);
    $average = $sum / count($array);
    return $average;
}