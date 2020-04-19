<?php
$id =$_POST['id'];
$num =$_POST['num'];
$oper =$_POST['oper'];
$toa =$_POST['toa'];
$in =$_POST['in']; 
$con = mysqli_connect('localhost','root','','testbaza');
                            $getdate = getdate();
                            $sellNumzero = 0;
                            $queryLog = "INSERT INTO tabela1 (ID,Broj,Operater,Datum,Tip_Algoritma_Koristen,Prodan,BrInvoice) 
                            VALUES ('$id', '$num', '$oper', 'GETDATE()', '$toa', '$sellNumzero', '$in'); ";
                            if ($con->query($queryLog) === TRUE) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $queryLog . "<br>" . $con->error;
                            }
                            $con->close();
?> 