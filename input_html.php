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
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  background:transparent;
}
</style>
<body>
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
<div class="limiter">    
   
            <div class="container-table100">  
              
                <div class="wrap-table100" style="color: white;">
                <ul>
               <li><a href="indexx.php" style="color:aliceblue;">Dashboard</a></li>
               <li><a href="input_html.php" style="color:aliceblue">Input Data</a></li>
               <li><a href="contact.asp" style="color:aliceblue">Delete Data</a></li>
               <li><a method="post" type="submit" href="#" style="color:aliceblue; " name="logout" onclick="logoutfun()">Log out</a></li>
               <br><br>
               </ul> 
                <div class="table100">
                <div class="table-responsive" id="employee_table">  
<div>
    <form method="POST" action="input.php">
    <label for="fname">ID</label>
    <input type="text" name="id" placeholder="id of number">

    <label for="lname">Number</label>
    <input type="text" name="num" placeholder="number">

    <label for="country">Operater</label>
    <input type="text" name="oper" placeholder="name of operater">

    <label for="country">Type of algorithm</label>
    <input type="text" name="toa" placeholder="name of algorithm">

    <label for="country">Number of invoices</label>
    <input type="text" name="in" placeholder="invoice number">
  
    <input method="post" type="submit" value="Submit" onclick="punibazu()">
    
</div>
</div>
</div>
 <!--===============================================================================================-->	
 <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
<script>
function punibazu()
{
     src="https://code.jquery.com/jquery-3.5.0.js"
     $.ajax({url:"input.php",success:function(result)
     {
       alert("You are logged out!");
        document.writeln("Napunjeno");      
     }
     })
}
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
</html>