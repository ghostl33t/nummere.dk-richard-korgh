<?php  
 //index.php  
///// JABUIKE SU BILE SLATKEE TNTNTNT 
     //LoginCheck
     $logConn = mysqli_connect('localhost','root','','testbaza');
     $query = "SELECT Logovan FROM users WHERE id = 2";
     $convertQuery = mysqli_query($logConn,$query);
     $res = $convertQuery->fetch_assoc();
     if($res["Logovan"] == 0)
     {
          header("location: login.php");
     }
 $connect = mysqli_connect('localhost', 'root', '', 'testbaza');  
 $query = "SELECT * FROM tabela1 ORDER BY ID ASC";  
 $result = mysqli_query($connect, $query);  

 //LOGOUT
 
 ?>  
 <!DOCTYPE html>  
 <html>  
     
      <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/tabela/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/tablecss.css">
      </head>  
      <body>
                <div class="limiter">     
            <div class="container-table100">  
                <div class="wrap-table100">
                <ul>
               <li><a href="indexx.php" style="color:aliceblue;">Dashboard</a></li>
               <li><a href="input_html.php" style="color:aliceblue">Input Data</a></li>
               <li><a href="contact.asp" style="color:aliceblue">Delete Data</a></li>
               <li><a method="post" type="submit" href="#" style="color:aliceblue; " name="logout" onclick="logoutfun()">Log out</a></li>
               </ul> 
                    <div class="table100">
                <div class="table-responsive" id="employee_table">  
                     <table class="kontent">  
                          <tr>  
                               <th><a class="column_sort" id="id" data-order="desc" href="#">ID</a></th>  
                               <th><a class="column_sort" id="broj" data-order="desc" href="#">Number</a></th>  
                               <th><a class="column_sort" id="operater" data-order="desc" href="#">Operator</a></th>  
                               <th><a class="column_sort" id="datum" data-order="desc" href="#">Date</a></th>  
                               <th><a class="column_sort" id="Tip_Algoritma_Koristen" data-order="desc" href="#">Type of algorithm</a></th>  
                               <th><a class="column_sort" id="Prodan" data-order="desc" href="#">Sold</a></th>  
                               <th><a class="column_sort" id="brinvoice" data-order="desc" href="#">Number of invoice</a></th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["ID"]; ?></td>  
                               <td><?php echo $row["Broj"]; ?></td>  
                               <td><?php echo $row["Operater"]; ?></td>  
                               <td><?php echo $row["Datum"]; ?></td>  
                               <td><?php echo $row["Tip_Algoritma_Koristen"]; ?></td>
                               <td><?php 
                               $checkedBoxVar = "";
                               if($row["Prodan"] == false)
                               {
                                   $checkedBoxVar = 'NO';
                               }
                               else if($row["Prodan"] == true){
                                   $checkedBoxVar = 'YES';
                               }
                               echo $checkedBoxVar; ?></td>  
                               <td><?php echo $row["BrInvoice"]; ?></td>    
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           </div>
		</div>
	</div>
           <br />  
      </body>  
      <!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
 </html>  
 <script>  
 $(document).ready(function(){  
      $(document).on('click', '.column_sort', function(){  
           var column_name = $(this).attr("id");  
           var order = $(this).data("order");  
           var arrow = '';  
           //glyphicon glyphicon-arrow-up  
           //glyphicon glyphicon-arrow-down  
           if(order == 'desc')  
           {  
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-down"></span>';  
           }  
           else  
           {  
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-up"></span>';  
           }  
           $.ajax({  
                url:"sort.php",  
                method:"POST",  
                data:{column_name:column_name, order:order},  
                success:function(data)  
                {  
                     $('#employee_table').html(data);  
                     $('#'+column_name+'').append(arrow);  
                }  
           })  
      });  
 }); 
function logoutfun()
{
     src="https://code.jquery.com/jquery-3.5.0.js"
     $.ajax({url:"logout.php",success:function(result)
     {
          alert("You are logged out!");
          location.reload(); 
     }
     })
}
 </script>  
