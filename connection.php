<?php $dbserverIme = "localhost";
  $dbuserIme = "root";
  $dbSifra = "";
  $dbImeBaze = "testbaza";
  $sort = "SELECT * FROM tabela1 ORDER BY ";
  $conn = mysqli_connect($dbserverIme,$dbuserIme,$dbSifra,$dbImeBaze);
  if($conn -> connect_error){
    die("Konekcija neuspjesna". $conn-> connect_error);
  } ?>