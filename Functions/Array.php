<?php
/**
 * Created by PhpStorm.
 * User: tranb
 * Date: 4/16/2018
 * Time: 8:53 PM
 */


$mang = array();

$mang[] = "bo";
$mang[] = "duyen";
$mang[] = "hien";


//echo count($mang);


echo "<pre>";
print_r($mang);
echo "<pre />";



foreach ($mang as $key => $value)
{
    print_r($value);
//    echo  $value;
}



//mang hon hop

$honhop = array();

$honhop["bo"] = "bo";
$honhop["duyen"] = "duyen";
$honhop["hien"] = "hien";
$honhop[] = "1";
$honhop[] = "2";

echo $honhop["bo"];
