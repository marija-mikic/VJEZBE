<?php

// Napišite program koji za unesena tri broja ispisuje najveći

<?php
$num1=50;
$num2=40;
$num3=20;
echo " value is $num1 $num2 $num3 <br>"; 
if($num1>$num2 and $num1>$num3)
{
    echo "Max is $num1";
}
else if($num2>$num3)
{
    echo "Max is $num2";
}
else
{
    echo "Max is $num3";
}
?>