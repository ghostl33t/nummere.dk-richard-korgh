<?php  
 //index.php  
 
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
     
     <style>
     .assignDesignButton {
	background:linear-gradient(to bottom, #de4eb5 5%, #de4eb5 100%);
	background-color:#de4eb5;
	border-radius:3px;
	border:1px solid #910068;
	display:inline-block;
	cursor:pointer;
	color:white;
	font-family:Arial;
	font-size:15px;
	padding:3px 23px;
	text-decoration:none;
	text-shadow:0px 1px 0px black;
     transition: 0.2s;
     }
     .assignDesignButton:hover {
          background:linear-gradient(to bottom, #de4eb5 5%, #910068 100%);
          background-color:black;
          color:white;
     }
     .assignDesignButton:active {
          position:relative;
          top:1px;
     }


     .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
     </style>
      </head>  
      <body>
                <div class="limiter">   
                <ul style="align-items: top;">
               <li style="justify-content: left; align-items: top;"><a  href="indexx.php" style="color:aliceblue;">Dashboard</a></li>
               <li style="justify-content: left; align-items: top;"><a href="editdata.php" style="color:aliceblue">Number Holders</a></li>
               <li style="justify-content: left; align-items: top;"><a method="post" type="submit" href="#" style="color:aliceblue; " name="logout" onclick="logoutfun()">Log out</a></li>
               </ul>  
            <div class="container-table100">  
            
               <div class="wrap-table100">
               
                    <div class="table100">
                <div class="table-responsive" id="employee_table">  
                     <table class="kontent">  
                          <tr>  
                               
                               <th style="text-align:center"><a class="column_sort" id="id" data-order="desc" href="#">ID</a></th>  
                               <th style="text-align:center"><a class="column_sort" id="broj" data-order="desc" href="#">Number</a></th>  
                               <th style="text-align:center"><a class="column_sort" id="operater" data-order="desc" href="#">Operator</a></th>  
                               <th style="text-align:center"><a class="column_sort" id="datum" data-order="desc" href="#">Date</a></th>  
                               <th style="text-align:center"><a class="column_sort" id="Tip_Algoritma_Koristen" data-order="desc" href="#">Type of algorithm</a></th>  
                               <th style="text-align:center"><a class="column_sort" id="Prodan" data-order="desc" href="#">Assigned</a></th>  
                                 
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>
                          <div id="refreshData">  
                          <tr>  
                               <td style="text-align:center" class="nr"><?php echo $row["ID"]; ?>                    </td>  
                               <td style="text-align:center"><?php echo $row["Broj"]; ?>                  </td>  
                               <td style="text-align:center"><?php echo $row["Operater"]; ?></td>  
                               <td style="text-align:center"><?php echo $row["Datum"]; ?></td>  
                               <td style="text-align:center"><?php echo $row["Tip_Algoritma_Koristen"]; ?></td>
                               <td style="text-align:center"><?php 
                               $checkedBoxVar = "";
                               if($row["Prodan"] == false)
                               {
                                   $checkedBoxVar = '<a href="#" class="assignDesignButton">ASSIGN</a>';
                               }
                               else if($row["Prodan"] == true){
                                   $checkedBoxVar = 'YES';
                               }
                               echo $checkedBoxVar; ?></td>     
                          </tr>
                          </div>  
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
           <div id="myModal" class="modal">
          <div class="modal-content">
          <span class="close">&times;</span>
                          <?php   
                                   include 'DodjelaBrojaSaDashboardaEditData.php';
                          ?>  

     </div>
</div> 
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
 <script type="text/javascript" src="jquerry/jquery-3.5.0.min.js"></script>
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