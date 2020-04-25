<?php
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
<html>  
    <head>  
        <title>Webslesson Demo - Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
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
                <ul style="align-items: top;">
               <li style="justify-content: left; align-items: top;"><a  href="indexx.php" style="color:aliceblue;">Dashboard</a></li>
               <li style="justify-content: left; align-items: top;"><a href="editdata.php" style="color:aliceblue">Number Holders</a></li>
               <li style="justify-content: left; align-items: top;"><a method="post" type="submit" href="#" style="color:aliceblue; " name="logout" onclick="logoutfun()">Log out</a></li>
               </ul>   
				<span ID="result"></span>
				<div ID="live_data"></div>                 
			</div>  
		</div>
    </body>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
 </html>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"DodjelaBrojaSaDashboardaSelect.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var Ime = $('#Ime').text();
        var Prezime = $('#Prezime').text();  
        var Email = $('#Email').text();
        var Adresa = $('#Adresa').text();  
        var BrojKuce = $('#BrojKuce').text();
        var PostanskiBroj = $('#PostanskiBroj').text();     
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{Ime:Ime, Prezime:Prezime,Email:Email,Adresa:Adresa,BrojKuce:BrojKuce,PostanskiBroj:PostanskiBroj},  
            dataType:"text",  
            success:function(data)  
            {  
                fetch_data();  
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