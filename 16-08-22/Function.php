<?php
// $arry = ['HTML', 'CSS'];
$arry = array("HTMl", "CSS", "JAVASCRIPT","PHP");
print_r($arry);
echo count($arry);
// for ($a = 0; $a < $arry; $a++) {
//     echo $arry;
// }

// foreach ($arry as $value => $key) {
//     echo $value;
//     echo $key;
// }
// $a = 0;
// while ($a < $arry) {
//     echo $arry[$a];
//     $a++;
// }
$a = 0;
while ($a < count($arry)) {
    echo "This Number is " . $arry[$a] . "<br>";
    $a++;
}
