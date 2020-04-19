<?php
// json_mysql.php

$connect = mysqli_connect("localhost","root","","testbaza");
$filename = "jsonFajl.json";
$data = file_get_contents($filename);
$array = json_decode($data,true);

foreach($array as $row)
{
    $sql="INSERT INTO tabela1(ID,Broj,Operater,Datum,Tip_Algoritma_Koristen,Prodan,BrInvoice) 
    VALUES ('".$row["ID"]."', '".$row["Broj"]."','".$row["Operater"]."','".$row["Datum"]."','".$row["Tip_Algoritma_Koristen"]."','".$row["Prodan"]."','".$row["BrInvoice"]."')";
    mysqli_query($connect,$sql);
}
echo "Podatci su napunjeni";
?>