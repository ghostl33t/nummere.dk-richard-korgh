<?php  
$connect = mysqli_connect("localhost", "root", "", "testbaza");
$ime =$_POST['Ime'];
$prezime =$_POST['Prezime'];
$email =$_POST['Email'];
$adresa =$_POST['Adresa'];
$brojKuce =$_POST['BrojKuce'];
$postanskiBroj =$_POST['PostanskiBroj'];
$sql = "INSERT INTO korisnicibrojeva(Ime, Prezime,Email,Adresa,BrojKuce,PostanskiBroj) 
VALUES ('$ime', '$prezime', '$email', '$adresa', '$brojKuce', '$postanskiBroj'); ";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>