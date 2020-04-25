<?php 
$connect = mysqli_connect('localhost', 'root', '', 'testbaza');  
$query = "SELECT * FROM tabela1 ORDER BY ID ASC";  
$result = mysqli_query($connect, $query); 
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
       echo' <tr>  
            <td>' . $row["ID"] . '</td>  
           <td>' . $row["Broj"] . '</td>  
           <td>' . $row["Operater"] . '</td>  
           <td>' . $row["Datum"] . '</td>  
           <td>' . $row["Tip_Algoritma_Koristen"] . '</td>  
           <td>' . $checkedBoxVar . '</td>  
      </tr>'; 
    }
}