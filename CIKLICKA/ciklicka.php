<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
<div class="container form">
        <div class="row">
            <form method="GET" class="mx-auto">
                <input type="number" name="BROJ REDAKA">
                <input type="number" name="BROJ STUPACA">
                <button action="submit">KREIRAJ TABLICU</button>
            </form>
        </div>
    </div>
<?php 


function getSpiralArray($row, $column)
{
    $pos = 1;

    $velicina = $row*$column;

    $row--;
    $column--;

    $top = 0;
    $right = $column;
    $bottom = $row;
    $left = 0;
    $result = [];
    do
    {

    for ($i = $right; $i >= $left; $i--)
     {
        $result[$bottom][$i] = $pos++;
    }
    $bottom--;

    for ($i = $bottom; $i >= $top; $i--) {
        $result[$i][$left] = $pos++;
    }
    $left++;
    for($i = $left; $i <= $right; $i++)
    {
        $result[$top][$i] = $pos++;
    }
    $top++;
    for($i = $top; $i<= $bottom; $i++)
    {
        $result[$i][$right] = $pos++;
    }
    $right--;
    }
        while ($pos <= $velicina);
    return $result;
}

function PrintArray($row, $column, $array)

{
    echo '<table>';
    for ($i = 0; $i < $row; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $column; $j++) {
            echo '<td>' . $array[$i][$j] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

$row =5;
$column =5;

$arr = getSpiralArray($row,$column);


echo '<pre>';
PrintArray($row,$column, $arr);

echo '</pre>';
?>



</body>
</html>



