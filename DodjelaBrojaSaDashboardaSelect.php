<!DOCTYPE html>
<html>
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
          
          h1{
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
          }
          table{
            width:100%;
            table-layout: fixed;
          }
          th{
            padding: 20px 15px;
            text-align: left;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
          }
         
          
          
          /* demo styles */
          
          @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
          body{
               background: #c850c0;
               background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);
               background: -o-linear-gradient(45deg, #4158d0, #c850c0);
               background: -moz-linear-gradient(45deg, #4158d0, #c850c0);
               background: linear-gradient(45deg, #4158d0, #c850c0);
            font-family: 'Roboto', sans-serif;
          }
          section{
            margin: 50px;
          }
          
          
          /* follow me template */
          .made-with-love {
            margin-top: 40px;
            padding: 10px;
            clear: left;
            text-align: center;
            font-size: 10px;
            font-family: arial;
            color: black;
          }
          .made-with-love i {
            font-style: normal;
            color: black;
            font-size: 14px;
            position: relative;
            top: 2px;
          }
          .made-with-love a {
            color: black;
            text-decoration: none;
          }
          .made-with-love a:hover {
            text-decoration: underline;
          }
          
          
          /* for custom scrollbar for webkit browser*/
          
          ::-webkit-scrollbar {
              width: 6px;
          } 
          ::-webkit-scrollbar-track {
              box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
          } 
          ::-webkit-scrollbar-thumb {
              box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
          }
          tr{
               color:black;
          }
          a { text-decoration: none; }
               </style>
     <head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <meta charset="UTF-8">
     </body>
     
</html>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "testbaza");  
 $output = '';  
 $sql = "SELECT * FROM korisnicibrojeva  WHERE BrojI IS NULL OR BrojII IS NULL  ORDER BY ID DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '   
       
      <div class="container-table100">  
            
      <div class="wrap-table100">
      
           <div class="table100"> 
       <table class="kontent">     
           
                <tr>  
                     <th style="text-align:center "><a href=#>ID</a></th>  
                     <th style="text-align:center"><a href=#>First Name</a></th>  
                     <th style="text-align:center"><a href=#>Last Name</a></th>
                     <th style="text-align:center"><a href=#>Email</a></th>
                     <th style="text-align:center"><a href=#>Adress</a></th>
                     <th style="text-align:center"><a href=#>House Nubmer</a></th>
                     <th style="text-align:center"><a href=#>Postal Number</a></th>        
                     <th style="text-align:center"><a href=#>Assign</a></th>   
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '
           
                <tr>  
                
                     <td style=" text-align:center;" class="nr" >'.$row["ID"].'</td>  
                     <td style=" text-align:center;" class="Ime" data-id1="'.$row["ID"].'" >'.$row["Ime"].'</td>
                     <td style=" text-align:center"class="Prezime" data-id2="'.$row["ID"].'" >'.$row["Prezime"].'</td> 
                     <td style=" text-align:center"class="Email" data-id3="'.$row["ID"].'" >'.$row["Email"].'</td> 
                     <td style=" text-align:center"class="Adresa" data-id4="'.$row["ID"].'" >'.$row["Adresa"].'</td>
                     <td style=" text-align:center"class="BrojKuce" data-id5="'.$row["ID"].'" >'.$row["BrojKuce"].'</td> 
                     <td style=" text-align:center"class="PostanskiBroj" data-id6="'.$row["ID"].'" >'.$row["PostanskiBroj"].'</td>   
                     <td><a href="#" id="AssignButt" class="assignDesignButtonX">ASSIGN</a></td>   
                      
                     </tr>  
           ';  
      }  
 }   
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>
 <script>
    var userID = "";
     $(".assignDesignButtonX").click(function() {
     var $row = $(this).closest("tr");    // Find the row
     userID = $row.find(".nr").text(); // Find the text
     // Let's test it out
     alert(userID);
     $.post('getUserID.php',{USID:userID},
     function()
     {
         alert("IZVRSENO " + userID);
     });
     });
 </script>
  
 