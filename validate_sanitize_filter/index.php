<?php

$input = "a@bit";
$result = filter_var($input,FILTER_VALIDATE_EMAIL);
// var_dump($result);


$sanitizeInput = "<div>aaaa</div>bbb";
$result = filter_var($sanitizeInput,FILTER_SANITIZE_STRING);

var_dump($result);