<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ciklicka tablica</title>
    <link rel="stylesheet" href="index.css">
    <style>   
    td{
    border: 1px solid rgb(247, 239, 239);
    text-align: center;
    color:white;
    height: 30px;
    width: 30px;
}     
        table {
                float:right;  
                background:padding:100px;
                border:;
        }
        body{
            background-color:grey;
            
        }
        .row {
            float:right;
            color:white;
            border:
            
              }
        button{
            background-color:green;
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
    if(isset($_GET['column']))
    $column=$_GET['broj redaka'];
    if(isset($_GET['row']))
    $column=$_GET['broj stupaca'];
    echo '<div class="container mx-auto">';

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

PrintArray($row,$column, $arr);

echo '<pre>';



echo '</pre>';

?>

<div class="container form">

        <div class="row" >
        <div style="padding:80px;">

                <p>Broj redaka </p>
                <input type="number" name="Broj redaka" ></br>
                <p>Broj stupca</p></br>
                <input type="number" name="Broj stupaca"></br>
                <button action="submit">KREIRAJ TABLICU</button></br>
                </form>
</div>
        </div>
    </div>


</body>
</html>