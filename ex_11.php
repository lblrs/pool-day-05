<?php
function sanitize(string $input) {
    $input= strip_tags($input);
    $input= strtolower($input);
    $input= trim($input);
    return $input;
};