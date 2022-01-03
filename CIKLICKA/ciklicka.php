<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
                table {
                float:right;  
                background-color:padding:100px;
        }
        .row {
            float:right;
            
              }
        </style>
    </head>
<body>


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

<div class="container form">

        <div class="row" >
        <div style="padding:80px;">

                <p>BROJ REDAKA </p>
                <input type="number" name="BROJ REDAKA" ></br>
                <p>BROJ STUPACA</p></br>
                <input type="number" name="BROJ STUPACA"></br>
                <button action="submit">KREIRAJ TABLICU</button></br>
                </form>
</div>
        </div>
    </div>


</body>
</html>



