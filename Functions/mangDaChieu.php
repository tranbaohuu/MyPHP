<?php
/**
 * Created by PhpStorm.
 * User: Huu
 * Date: 4/17/2018
 * Time: 8:17 PM
 */


$students = array
(
    "huu" => array
    ("adddress" => "tanmai",
        "Sex" => "1",
        "weight" => 60
    ),
    "quyen" => array
    ("adddress" => "thaihiep",
        "Sex" => "0",
        "weight" => 50
    ),
    "babaa" => array
    ("adddress" => "thaihiep",
        "Sex" => "0",
        "weight" => 50
    )


);

echo "<pre>";
print_r($students);
echo "<pre/>";

//
//echo "In ra key <pre>";
//print_r(array_keys($students));
//echo "<pre/>";
//
//
//echo "In ra value <pre>";
//print_r(array_values($students));
//echo "<pre/>";
//
//
//echo "Loai bo phan tu cuoi cung <pre>";
//print_r(array_pop($students));
//echo "<pre/>";
//
//
//echo "Loai bo phan tu cuoi cung <pre>";
//print_r(array_pop($students));
//echo "<pre/>";
//
//echo "Loai bo phan tu dau tien <pre>";
//print_r(array_shift($students));
//echo "<pre/>";
//
//
//echo "Loai bo phan tu trung nhau <pre>";
//print_r(array_unique($students));
//echo "<pre/>";
//

echo "Merge Phan tu 2 mang <pre>";
print_r(array_merge($students, array("nhi" => array
("adddress" => "thaihiep",
    "Sex" => "0",
    "weight" => 50
))));
echo "<pre/>";


echo "Merge 2 mang<pre>";
print_r($students);
echo "<pre/>";



//
//echo "dao key thanh value va alue thanh key<pre>";
//print_r(array_flip($students));
//echo "<pre/>";


////xoa bien khoi bo nho
//unset($students);
//
//echo "Xoa bien khoi vung nho unset <pre>";
//print_r($students);
//echo "<pre/>";


