<?php
$template = "Hello [name], you are [role]";

$replacements = ["name" => "Lucie", "role" => "admin"];

function replaceTemplate ($template, $replacements) {
    foreach ($replacements as $key => $value) {
        $replace = "[$key]";
        $template = str_replace($replace, $value, $template);
        }
    return $template;

};
