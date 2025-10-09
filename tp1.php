<?php
require ("res/debug.php");
$tableau=array();
$tableau [] = "toto";
$tableau ["deux"] = "titi";
$tableau [""] = "toto";
display2($tableau);

foreach ($tableau as $key=>$value) {
    echo ($key.":".$value."<br/>");
}
