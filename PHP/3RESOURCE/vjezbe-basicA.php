<?php
//Napravite jednostavan HTML obrazac i prihvatite korisničko ime i prikažite ime putem PHP echo izjave
$var = 'PHP Tutorial';
?>
!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title><?php echo $var; ?> - W3resource!</title>
  </head>
  <body>
  <h3><?php echo $var; ?></h3>
  <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
  <p><a href="https://www.w3resource.com/php/php-home.php">Go to the <?php echo $var; ?></a>.</p>
</body>
</html>

Napravite jednostavan HTML obrazac i prihvatite korisničko ime i prikažite ime putem PHP echo izjave.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
        <h3>MOLIM UNESITE SVOJE IME </h3>
        <input type="text" name="name">
        <input type="submit" value="POTVRDI">
</form>

<?php
$name=$_POST['name'];
echo "<h3> Dobar dan $name </h3>";
?>

</body>
</html>

<?php
//1. NAPIŠITE PROGRAM ZA IZRAČUNAVANJE ZBOROJA DVAJU ZADANIH CJELOBROJNIH VRIJEDNOSTI. AKO SU DVIJE VRIJEDNOSTI ISTE ONDA VRAĆA TROSTRUKI NJIHOV ZBROJ           

function test ($x,$y)
{
    return $x==$y ? // x je jednako y
     ($x+$y)*3 //ako je jednako pomnoži sa 3
     :$x+$y;//zbroji x i y
}
echo test(4,2)."\n";
echo test(6,2)."\n";
echo test(3,3)."\n";
?>
<?php
//2.NAPIŠITE PROGRAM DA DOBIJETE APSOLUTNU RALIKU IZMEĐU n I 51. AKO JE n VEĆI OD 51 VRATITE TROSTRUKU APSOLUTNU RAZLIKU.

function test($n) 
{
     $x = 51;

     if ($n > $x)// ako je n veći od 51
     {
       return ($n - $x)*3;//onda množi sa tri
     }
   return $x - $n; //provjeri dali je broj veći od n
}
echo test(53)."\n";
echo test(30)."\n";
echo test(51)."\n"; 
?>
<?php
//3.napišite program za provjeru dva zadana cijela broja i vratite na true ako je jedan od njih 30 ili ako je njihovzboj 30
function test($x,$y) 
{
     return ($x==30)||($y==30)||($x+$y==30);
}
var_dump( test(30,0));//30+0=20-thrue = var_dump se koristi za informaciju o varijabli
var_dump( test(25,0));
var_dump( test(20,0));
?>

<?php
//PROVJERI ZADANI CIJELI BROJ I VRATI NA THRUE AKO JE UNUTAR 10 OD 100 ILI 200 
function test ($x)
{
if (abs($x-100)<=10|| abs($x-200)<=10)//abs apsolutni broj
return true;
return false;
}
var_dump(test(5));
var_dump(test(210));
var_dump(test(800));

?>

<?php
//5.program za stvaranje novog stringa gdje se if dodaje na početak danog niza. ako niz već počinje sa if vratite nisz nepromjenjen.
function test($s)
{
    if (strlen($s)>2 && substr ($s,0,2)=="if")//subst =vraća dio niza ;strlen-broji duljinu niza
    {
        return $s;
    }
    return "if".$s;//stavi IF
}
echo test("if else")."\n";
echo test("else")."\n";
?>

<?php
//6.PROGRAM ZA UKLANJANJE ZNAKA U ZADANOJ POZICIJI ZADANOG NIZA
function test ($s,$n)
{
    return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);//
}
echo test("Marija",3)."\n";
echo test("Marija",5)."\n";
echo test("Marija",1)."\n";
?>
<?php
//7.PROGRAM ZA ZAMJENU PRVOG I ZADNJEG ZNAKA U NIZU I VRAĆANJE NOVOG STRINGA
function test ($str)
{
    return strlen($str)>1?
    substr($str,strlen($str)-1).
    substr($str,1,strlen($str)-2).
    substr($str,0,1):
    $str;
}
echo test("Marija")."\n";
echo test("dakovo")."\n";
echo test("IGK")."\n";
?>








    