<?php
/* I tried with and without session_start(). 
Both ways works with same probelm (read next)*/
//session_start();
include_once './securimage/securimage.php';

$securimage = new Securimage();

if ($securimage->check($_GET['captcha_code']) == false) 
    exit();

else
    echo "true";
?>