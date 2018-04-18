<?php
/**
 * Created by PhpStorm.
 * User: tranb
 * Date: 4/14/2018
 * Time: 11:04 PM
 */


$a = "abc";

$username =  $_GET["username"];
$password =  $_GET["password"];

if ($username == "tranbaohuu" && $password == "123456")
{
    echo "dang nhap thanh cong";
}
else{
    echo  "that bai";
}








//echo $username . "<br/>>";
//echo $password . "<br/>>";