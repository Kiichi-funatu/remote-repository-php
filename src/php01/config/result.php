<?php

$my_name = htmlspecialchars($_POST["my_name"],ENT_QUOTES);
$coice = htmlspecialchars($_POST["coice"],ENT_QUOTES);
$namber = htmlspecialchars($_POST["number"],ENT_QUOTES);

echo "私の名前は、" . $my_name."<br/>";
echo "ご希望の商品は、" . $coice,"<br/>";
echo "注文数は、" . $namber . "<br/>";
