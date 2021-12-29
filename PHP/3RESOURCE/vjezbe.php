<!--Napravite jednostavan HTML obrazac i prihvatite korisničko ime i prikažite ime putem PHP echo izjave.
<?php
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
--!

<!--Napravite jednostavan HTML obrazac i prihvatite korisničko ime i prikažite ime putem PHP echo izjave.
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

