<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //napravite skriptu koja pokazuje 1-2-3-4-5-6-7-8-9-10 u jednom retku. neće biti crtice na početnoj i završnoj poziciji

    for ($x=1;$x<=10;$x++)
{
        if ($x<10)
    {
    echo "$x-";
    }
    else
    {
        echo"$x"."";
    }
    
}

echo "<br>";

//izradite skriptu pomoću petlje for za dodavanje svih cijelih brojeva između 0 i 30 i prikaz broja
$sum=0;
for($x=1;$x<=30;$x++)
{
    $sum +=$x;
}
echo"sum is $sum"."";

echo "<br>";
//izradite skriptu za izradu sljedećeg uzroka

for($x=1;$x<=5;$x++)
{
    for($y=1;$y<=$x;$y++)
{
    echo "*";
      if ($y<$x)
{
        echo " ";
    }
}
    echo "<br>";

}

$n=5;
for($i=1; $i<=$n; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo "<br>";
}
for($i=$n; $i>=1; $i--)
{
for($j=1; $j<=$i; $j++)
{
echo " * ";
}
echo "<br>";
}

//napišite program za izračunavanje i ispist faktorijele broja koristeći for petlju.faktorijel je 6

$n=6;
$i=1;
for($i=1;$i<=$n-1;$i++)
{
    $x*($i+1);
}
echo"fakrorijel od $n="."\nˇ"


?>
</body>
</html>