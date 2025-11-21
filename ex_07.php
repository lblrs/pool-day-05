<?php
$suffix = "Ed";
function addSuffix(string $str) {
    if (str_ends_with("ED")) {
        return $str;
    }else{
        $suffix = "ED";
        return "$str, $suffix";
    }
    echo $str, $suffix;
};

addSuffix ("Hello")