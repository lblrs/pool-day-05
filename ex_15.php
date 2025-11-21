<?php
$replacements = array (
    "name" => "Lucie",
    "role" => "admin",
);

function replaceTemplate(string $template) {
    foreach(array ($replacements) as [$key, $value]) {
        echo "Hello $key, you are $value";
    }
}; 

