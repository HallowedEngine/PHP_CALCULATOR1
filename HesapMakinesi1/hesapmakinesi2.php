<?php

$s1=$s_POST['sayi1'];
$s1=$s_POST['sayi2'];
$islem_$_POST['islem'];

$top=$s1+$s2;
$cik=$s1-$s2;
$carp=$s1*$s2;
$bol=$s1/$s2;
$kal=$s1%$s2;


if($islem == "+")
{
    echo $s1." ile " .$s2 " sayılarının toplamı= ".$top;
}
else if($islem == "-")
{
    echo $s1." ile " .$s2 " sayılarının toplamı= ".$cik;
}
else if($islem == "*")
{
    echo $s1." ile " .$s2 " sayılarının toplamı= ".$carp;
}
else if($islem == "/")
{
    echo $s1." ile " .$s2 " sayılarının toplamı= ".$bol;
}
else if($islem == "%")
{
    echo $s1." ile " .$s2 " sayılarının toplamı= ".$kal;
}

else{
    echo "İşleminizi giriniz!";
}
?>