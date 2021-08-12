<?php

$email = '3234@ssdf.com';

$checkedMail = filter_var($email, FILTER_VALIDATE_EMAIL);

echo "${checkedMail}".'<br>';
echo $checkedMail.'<br>';
echo gettype($checkedMail).'<br>';

$email = "mybookforweb@gmail.com";

$checkMail = filter_Var($email, FILTER_VALIDATE_EMAIL).'<br>';

echo $checkMail;

if($checkMail == true) {
    echo 'true'.'<br>';
} else {
    echo 'false'.'<br>';
}