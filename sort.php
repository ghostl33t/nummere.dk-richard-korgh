<?php  
 //sort.php  
 $connect = mysqli_connect("localhost", "root", "", "testbaza");  
 $output = '';  
 $order = $_POST["order"];  
 if($order == 'desc')  
 {  
      $order = 'asc';  
 }  
 else  
 {  
      $order = 'desc';  
 }  
 $query = "SELECT * FROM tabela1 ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";  
 $result = mysqli_query($connect, $query);  
 $output .= '  
 <table class="kontent">  
      <tr>  
           <th><a class="column_sort" id="id" data-order="'.$order.'" href="#">ID</a></th>  
           <th><a class="column_sort" id="Broj" data-order="'.$order.'" href="#">Number</a></th>  
           <th><a class="column_sort" id="operater" data-order="'.$order.'" href="#">Operator</a></th>  
           <th><a class="column_sort" id="Datum" data-order="'.$order.'" href="#">Date</a></th>  
           <th><a class="column_sort" id="Tip_Algoritma_Koristen" data-order="'.$order.'" href="#">Type of algorithm</a></th>  
           <th><a class="column_sort" id="Prodan" data-order="'.$order.'" href="#">Sold</a></th> 
           <th><a class="column_sort" id="BrInvoice" data-order="'.$order.'" href="#">Number of invoice</a></th> 
      </tr>  
 ';  
 while($row = mysqli_fetch_array($result))  
 {  
     $checkedBoxVar = "";
     if($row["Prodan"] == false)
     
     {
         $checkedBoxVar = 'NO';
     }
     else if($row["Prodan"] == true){
         $checkedBoxVar = 'YES';
     }
      $output .= '  
      <tr>  
            <td>' . $row["ID"] . '</td>  
           <td>' . $row["Broj"] . '</td>  
           <td>' . $row["Operater"] . '</td>  
           <td>' . $row["Datum"] . '</td>  
           <td>' . $row["Tip_Algoritma_Koristen"] . '</td>  
           <td>' . $checkedBoxVar . '</td>  
           <td>' . $row["BrInvoice"] . '</td>   
      </tr>  
      ';  
 }  
 $output .= '</table>';  
 echo $output;  
 ?> 