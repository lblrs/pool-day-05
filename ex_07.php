<?php
function addSuffix(string $str, string $suffix ="ing") {
    
    if (str_ends_with($str, $suffix)) {
        return $str;
    }else{
        return "$str$suffix";
    }
};
