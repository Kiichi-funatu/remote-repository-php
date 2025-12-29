<?php 

$nane = "funatu";

echo "こんにちは" . $nane . "さん" . "<br/>";

$age = 41;

if ($age >= 20) {
    echo "「成人です」" . "<br/>";
} else {
   echo "「未成年です」" . "<br/>";
}

$fruits = ["apple", "banana", "orange"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br/>";
}

$person = ["name" => "Taro", "age" => 25, "gender" => "men"];
echo $person["name"] . "は" .  $person["age"] . "歳の" .  $person["gender"] . "です" . "<br/>";

function checkNumber($num) {
    if ($num % 2 == 0) {
        return "偶数";
    } else {
        return "奇数";
    }
}
echo checkNumber(5);