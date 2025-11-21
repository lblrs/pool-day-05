<?php
function fullname(string $first, string $last, bool $initialOnly) {
    if ($initialOnly == false){
        echo $first, $last;
    }else {
        echo substr($last, -1), "\n";
    }
};