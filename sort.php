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
           <th><a class="column_sort" id="Prodan" data-order="'.$order.'" href="#">Assigned</a></th> 
      </tr>  
 ';  
 while($row = mysqli_fetch_array($result))  
 {  
     $checkedBoxVar = "";
                               if($row["Prodan"] == false)
                               {
                                   $checkedBoxVar = '<a href="#" id="AssignButt" class="assignDesignButton" value="Submit">ASSIGN</a>';
                               }
                               else if($row["Prodan"] == true){
                                   $checkedBoxVar = 'YES';
                               }
      $output .= '  
      <tr>  
            <td class="nr">' . $row["ID"] . '</td>  
           <td>' . $row["Broj"] . '</td>  
           <td>' . $row["Operater"] . '</td>  
           <td>' . $row["Datum"] . '</td>  
           <td>' . $row["Tip_Algoritma_Koristen"] . '</td>  
           <td>' . $checkedBoxVar . '</td>    
      </tr>  
      ';  
 }  
 $output .= '</table>';  
 echo $output;  
 ?> 
 <script>
     var text = "";
      $(".assignDesignButton").click(function() {
     var $row = $(this).closest("tr");    
     text = $row.find(".nr").text(); 
     modal.style.display = "block";
     // When the user clicks on <span> (x), close the modal
     span.onclick = function() {
     modal.style.display = "none";
     }

     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event) {
     if (event.target == modal) {
     modal.style.display = "none";
     }
     } 
     alert(text);
     $.post('getNumberID.php',{ID:text},
     function()
     {
         //alert("IZVRSENO " + text);
     });
     });
     
      // Get the modal
     var modal = document.getElementById("myModal");

     // Get the button that opens the modal
     var btn = document.getElementById("assignDesignButton");

     // Get the <span> element that closes the modal
     var span = document.getElementsByClassName("close")[0];
     

 </script>