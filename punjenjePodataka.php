<?php
// json_mysql.php

$connect = mysqli_connect("localhost","root","","testbaza");
$filename = "jsonFajl.json";
$data = file_get_contents($filename);
$array = json_decode($data,true);

foreach($array as $row)
{
    $sql="INSERT INTO tabela1(ID,Broj,Operater,Datum,Tip_Algoritma_Koristen,Prodan) 
    VALUES ('".$row["ID"]."', '".$row["Broj"]."','".$row["Operater"]."','".$row["Datum"]."','".$row["Tip_Algoritma_Koristen"]."','".$row["Prodan"].")";
    mysqli_query($connect,$sql);
    $msg = "Hi User. New number was added to database:" + $row['Broj'] ;
    mail("alibegovicjasim1337@gmail.com","New Number was added to database",$msg);  
}

echo "Podatci su napunjeni";
?>