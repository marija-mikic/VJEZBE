 <?php
/* $str_tekst='Dijete ide u školu';
$str_znak=$str_tekst[0];
echo $str_znak;
echo $str_tekst[3];
echo $str_tekst[strlen($str_tekst)-1] // strlen brojač podataka
?>*/

/*OPERATORI USPOREDBE  
$a=1;
$b=2;
$a_tekst="1";

echo $a == $b ;
echo $a < $b;
echo $a == $a_tekst;
echo $a_tekst < $b;
?>*/

/*LOGIČKI OPERATORI TRUE FALSE 

$a=TRUE;
$b= FALSE;
echo !$a; // 0- negacija vrijednosti a
echo $a and $b; // 0-jedna od vrijednosti je 
echo $a or $b ;//1- bar jedna od vrijednost je TRUE
echo $a xor $b; // 1-ako je samo jedna vrijednost TRUE  a druga FALSE
?>*/
 
/* SLOŽENE I JEDNOSTAVNE IF -ELSE STRUKTURE 
$a=5;
$b=3;
if ($a>$b)

	echo "a je veće od b.";
?>*/
/*
$a=5;
$b=3;
if ($a<$b)
{
	echo "a je veće od b.";

}
else 
{
	echo "a je manji od b.";
}
?>*/

/*IF-ELSEIF (uvijet 2)- ako je prvi uvjet ispunjen on se ispunjava, ako nije provjerit će drugi uvjet i ako jest izvršava se, ako nije onda se provjerava trećiuvjet

$a=5;
$b=5;
if($a<$b)
{
echo "a je manji od b.";
}
elseif($a>$b)
{
echo "a je veći od b.";
}
else
{
echo "a je jednako b.";
}
?>*/



/*POLJA array 

$gradovi=array("zagreb","split","đakovo");

echo $gradovi[2];
?>*/
/*POLJA SA ZNAKOVNIM KLJUČEM

$post_br=array("zagreb"=>10000,
					"split"=>21000,
					"đakovo"=>31400);

					echo $post_br["đakovo"];
					?>

/*DVODIMENZIONIRANA POLJA
$igra= array(array("0","x","0"),
				array("x","0","x"),
				array("0","x","0")	
);
echo $igra[1][0];
?>*/
/*
$ocjene=array("ivica"=>array("hrvatski"=>4,
							"povijest"=>5, 
							"matematika"=>2),

				"tomica"=>array("hrvatski"=>4,
								"povijest"=>5, 
								"matematika"=>2),
				"perica"=>array("hrvatski"=>4,
								"povijest"=>5, 
								"matematika"=>2));

$prosjekIvica=($ocjene["ivica"]["hrvatski"]+
			   $ocjene["ivica"]["povijest"]+
			   $ocjene["ivica"]["matematika"])/3;
$prosjekTomica=($ocjene["tomica"]["hrvatski"]+
			   $ocjene["tomica"]["povijest"]+
			   $ocjene["tomica"]["matematika"])/3;
$prosjekPerica=($ocjene["perica"]["hrvatski"]+
			   $ocjene["perica"]["povijest"]+
			   $ocjene["perica"]["matematika"])/3;
?>

<table border="1" cellpading="5">
	<tr>
		<th></th>
		<th>HRVATSKI</th>
		<th>MATEMATIKA</th>
		<th>POVIJEST</th>
		<th>PROSJEK</th>
</tr>

<tr>
	<th>Ivica</th>
	<td><?php echo $ocjene["ivica"]["hrvatski"]?></td>
	<td><?php echo $ocjene["ivica"]["povijest"]?></td>
	<td><?php echo $ocjene["ivica"]["matematika"]?></td>
	<td><?php echo $prosjekIvica?></td>

</tr>

<tr>
	<th>Tomica</th>
	<td><?php echo $ocjene["tomica"]["hrvatski"]?></td>
	<td><?php echo $ocjene["tomica"]["povijest"]?></td>
	<td><?php echo $ocjene["tomica"]["matematika"]?></td>
	<td><?php echo $prosjekTomica?></td>

</tr>

<tr>
	<th>Perica</th>
	<td><?php echo $ocjene["perica"]["hrvatski"]?></td>
	<td><?php echo $ocjene["perica"]["povijest"]?></td>
	<td><?php echo $ocjene["perica"]["matematika"]?></td>
	<td><?php echo $prosjekPerica?></td>

</tr>
</table>
--!>
<!--



			   
/*polja sa brojčanim ključem
$ocjene=array(4,5,4);
$prosjek=($ocjene[1]+$ocjene[1]+$ocjene[2])/3;
echo"hrvatski: $ocjene[0] <br> ";
echo "matematika:$ocjene[1] <br> ";
echo "povijest:$ocjene[2] <br> ";
echo "prosjek ocjena je :$prosjek.";
?>*/

/*polja sa znakovnim ključem

$ocjene=array("hrvatski"=>4,
			  "povijest"=>5, 
			  "matematika"=>2);

$prosjek=($ocjene["hrvatski"]+$ocjene["povijest"]+$ocjene["matematika"])/3;

echo "hrvatski:{$ocjene["hrvatski"]} <br />";
echo "povijest:{$ocjene["povijest"]} <br/>";
echo "matematika:{$ocjene["matematika"]} <br />";
echo "prosjek ocijena je:$prosjek.";*/

/*PETLJA

WHILE*/
















