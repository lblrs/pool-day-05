<?php
function isPalindrome (string $str) {
    $str = strtolower($str);

        if (strrev($str) == $str) {
            $result = true;
        }else{
            $result = false;
        }
    
    echo $result;
};


