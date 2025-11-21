<?php
function countVowels(string $str) {
    echo preg_match_all('/[aeiouAEIOU]/', $str, $matches);
};

